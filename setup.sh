#!/usr/bin/env bash

# ==============================================================================
#  Averroes Digital Islamic School — Production Server Setup Script
# ==============================================================================
#  Script ini digunakan untuk inisialisasi dan setup cepat aplikasi di server.
#  Menangani composer install, .env, APP_KEY, migrasi, permission, & caching.
# ==============================================================================

set -e

# Warna Terminal
BOLD='\033[1m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
CYAN='\033[0;36m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${YELLOW}${BOLD}"
echo "=========================================================="
echo "    AVERROES DIGITAL ISLAMIC SCHOOL — SERVER SETUP        "
echo "=========================================================="
echo -e "${NC}"

# 1. Pengecekan Kebutuhan Dasar (PHP & Composer)
echo -e "${BLUE}▶ [1/7] Memeriksa kebutuhan sistem...${NC}"

if ! command -v php &> /dev/null; then
    echo -e "${RED}✘ Error: PHP belum terinstall di server ini.${NC}"
    exit 1
fi

PHP_VERSION=$(php -r "echo PHP_VERSION;")
echo -e "  ${GREEN}✔ PHP terdeteksi:${NC} v${PHP_VERSION}"

if ! command -v composer &> /dev/null; then
    echo -e "${RED}✘ Error: Composer belum terinstall di server ini.${NC}"
    exit 1
fi

echo -e "  ${GREEN}✔ Composer terdeteksi.${NC}"

# 2. Penyiapan File .env
echo -e "\n${BLUE}▶ [2/7] Menyiapkan file .env...${NC}"
if [ ! -f .env ]; then
    if [ -f .env.example ]; then
        cp .env.example .env
        echo -e "  ${GREEN}✔ File .env dibuat dari .env.example${NC}"
    else
        echo -e "${RED}✘ File .env.example tidak ditemukan!${NC}"
        exit 1
    fi
else
    echo -e "  ${CYAN}ℹ File .env sudah ada, melewati langkah pembuatan.${NC}"
fi

# 3. Instalasi Dependensi Composer (Production Mode)
echo -e "\n${BLUE}▶ [3/7] Menginstall paket Composer (Production)...${NC}"
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist
echo -e "  ${GREEN}✔ Paket composer berhasil diinstall.${NC}"

# 4. Generate Application Key jika belum ada
echo -e "\n${BLUE}▶ [4/7] Memeriksa Application Key...${NC}"
if grep -q "APP_KEY=base64:" .env; then
    echo -e "  ${CYAN}ℹ APP_KEY sudah terisi di .env.${NC}"
else
    php artisan key:generate --force
    echo -e "  ${GREEN}✔ APP_KEY baru berhasil dibuat di .env.${NC}"
fi

# 5. Database & Migrasi
echo -e "\n${BLUE}▶ [5/7] Memeriksa database & menjalankan migrasi...${NC}"
# Buat file sqlite jika menggunakan sqlite dan filenya belum ada
DB_CONN=$(grep -E "^DB_CONNECTION=" .env | cut -d '=' -f2 | tr -d ' ' || echo "")
if [ "$DB_CONN" = "sqlite" ] || [ -z "$DB_CONN" ]; then
    if [ ! -f database/database.sqlite ]; then
        mkdir -p database
        touch database/database.sqlite
        echo -e "  ${GREEN}✔ File database/database.sqlite dibuat.${NC}"
    fi
fi

# Jalankan migrasi database
php artisan migrate --force || {
    echo -e "  ${YELLOW}⚠ Peringatan: Migrasi database gagal atau belum dikonfigurasi.${NC}"
    echo -e "    Silakan sesuaikan konfigurasi DB_* di .env terlebih dahulu."
}

# 6. Storage Symlink & Permission Folder
echo -e "\n${BLUE}▶ [6/7] Menyesuaikan Storage Link & Permissions...${NC}"

# Buat symlink public/storage -> storage/app/public
php artisan storage:link || true

# Atur perizinan folder storage dan bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Jika dijalankan sebagai root/sudo, sesuaikan ownership ke webserver jika ada (www-data/nginx/apache)
if [ "$(id -u)" = "0" ]; then
    if id "www-data" &>/dev/null; then
        chown -R www-data:www-data storage bootstrap/cache
        echo -e "  ${GREEN}✔ Ownership disesuaikan ke www-data.${NC}"
    elif id "nginx" &>/dev/null; then
        chown -R nginx:nginx storage bootstrap/cache
        echo -e "  ${GREEN}✔ Ownership disesuaikan ke nginx.${NC}"
    fi
fi
echo -e "  ${GREEN}✔ Permission storage dan bootstrap/cache berhasil disetel (775).${NC}"

# 7. Optimasi & Caching Laravel (Production Ready)
echo -e "\n${BLUE}▶ [7/7] Melakukan optimasi cache Laravel...${NC}"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo -e "\n${GREEN}${BOLD}==========================================================${NC}"
echo -e "${GREEN}${BOLD}  ✔ SETUP SELESAI! WEBSITE AVERROES SIAP DIAKSES          ${NC}"
echo -e "${GREEN}${BOLD}==========================================================${NC}"
echo -e "\n${YELLOW}Langkah Terakhir untuk Kamu:${NC}"
echo -e "1. Buka dan edit file ${BOLD}.env${NC} sesuai server/domain kamu:"
echo -e "   ${CYAN}nano .env${NC}"
echo -e "   - Pastikan ${BOLD}APP_ENV=production${NC}"
echo -e "   - Pastikan ${BOLD}APP_DEBUG=false${NC}"
echo -e "   - Isi ${BOLD}APP_URL=https://namadomainkamu.com${NC}"
echo -e "   - Sesuaikan ${BOLD}DB_*${NC} jika menggunakan MySQL/PostgreSQL"
echo -e "\n2. Setelah mengedit ${BOLD}.env${NC}, cukup refresh cache sekali lagi dengan:"
echo -e "   ${CYAN}php artisan config:cache${NC}\n"
