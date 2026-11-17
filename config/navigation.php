<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alur Navigasi 'Halaman Selanjutnya' (Footer Next Page Flow)
    |--------------------------------------------------------------------------
    |
    | Di sini kamu bisa dengan mudah mengatur urutan halaman untuk tombol
    | "Halaman Selanjutnya" yang ada di bagian footer.
    |
    | Sistem akan otomatis mendeteksi halaman yang sedang dibuka oleh pengunjung,
    | lalu menampilkan tombol menuju halaman berikutnya sesuai urutan array di bawah.
    | Jika sudah berada di halaman terakhir, alur akan otomatis berputar kembali ke awal.
    |
    | Contoh alur default:
    | Beranda -> Tentang -> Kontak -> Beranda
    |
    | Panduan Pengaturan:
    | - 'title'  : Judul halaman yang tampil di tombol footer (contoh: 'Beranda', 'Tentang')
    | - 'url'    : URL / link tujuan halaman
    | - 'routes' : (Opsional) Nama route Laravel yang cocok
    | - 'paths'  : Pola path URL untuk deteksi (contoh: '/', 'about*', 'contact*', 'angkatan*')
    |
    */
    'flow' => [
        [
            'title' => 'Beranda',
            'url' => '/',
            'routes' => ['landing.home'],
            'paths' => ['/'],
        ],
        [
            'title' => 'Tentang',
            'url' => '/about',
            'routes' => ['landing.about'],
            'paths' => ['about*'],
        ],
        // Untuk menambahkan halaman Angkatan ke dalam alur navigasi, aktifkan baris berikut:
        // [
        //     'title' => 'Angkatan',
        //     'url' => '/angkatan',
        //     'routes' => ['landing.angkatan', 'landing.angkatan.show'],
        //     'paths' => ['angkatan*'],
        // ],
        [
            'title' => 'Kontak',
            'url' => '/contact',
            'routes' => ['landing.contact'],
            'paths' => ['contact*'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Arah Animasi Transisi Halaman (Page Transition Direction)
    |--------------------------------------------------------------------------
    |
    | Pilih arah gerakan animasi loader saat berpindah halaman:
    |
    | - 'bawah-ke-atas' (Default):
    |     Saat keluar : Loader meluncur naik dari bawah menutup layar.
    |     Saat masuk  : Loader lanjut meluncur naik ke atas membuka halaman baru.
    |
    | - 'atas-ke-bawah':
    |     Saat keluar : Loader meluncur turun dari atas menutup layar.
    |     Saat masuk  : Loader lanjut meluncur turun ke bawah membuka halaman baru.
    |
    */
    'transition_direction' => 'bawah-ke-atas', // Pilihan: 'bawah-ke-atas' atau 'atas-ke-bawah'
];
