<?php

if (!function_exists('averroes_img')) {
    /**
     * Resolves an image path from public/assets/img/{category}/ with multiple name & extension fallbacks.
     *
     * @param string $category e.g. 'kegiatan', 'fasilitas', 'karya', 'news'
     * @param string|array $filenames e.g. ['kegiatan-1', 'kunjungan-industri', '1']
     * @param string $fallback Fallback placeholder URL or asset path
     * @return string
     */
    function averroes_img(string $category, string|array $filenames, string $fallback = ''): string
    {
        $names = is_array($filenames) ? $filenames : [$filenames];
        $extensions = ['webp', 'jpg', 'jpeg', 'png', 'svg', 'avif', 'WEBP', 'JPG', 'JPEG', 'PNG'];
        $baseDir = !empty($category) ? "assets/img/" . trim($category, '/') . "/" : "assets/img/";

        foreach ($names as $name) {
            // If filename has an extension already
            if (pathinfo($name, PATHINFO_EXTENSION)) {
                $relative = $baseDir . ltrim($name, '/');
                if (file_exists(public_path($relative))) {
                    return asset($relative);
                }
            } else {
                // Try each extension
                foreach ($extensions as $ext) {
                    $relative = "{$baseDir}{$name}.{$ext}";
                    if (file_exists(public_path($relative))) {
                        return asset($relative);
                    }
                }
            }
        }

        // Return fallback if available, or default to the primary asset path
        if (!empty($fallback)) {
            return $fallback;
        }

        $primaryName = is_array($filenames) ? $filenames[0] : $filenames;
        return asset("{$baseDir}{$primaryName}.jpg");
    }
}

if (!function_exists('averroes_gallery')) {
    /**
     * Scans and returns all image asset items from public/assets/img/{category}/.
     * Automatically picks up any image dropped into the folder.
     * If empty, returns fallback items.
     *
     * @param string $category e.g. 'kegiatan', 'karya'
     * @param array $fallbacks Array of fallback URLs or arrays with 'url' and 'name'
     * @return array<int, array{url: string, name: string, filename: string}>
     */
    function averroes_gallery(string $category, array $fallbacks = []): array
    {
        $dir = public_path("assets/img/{$category}");
        $allowedExts = ['webp', 'jpg', 'jpeg', 'png', 'svg', 'avif'];
        $items = [];

        if (is_dir($dir)) {
            $files = scandir($dir);
            if ($files !== false) {
                $validFiles = [];
                foreach ($files as $file) {
                    if ($file === '.' || $file === '..' || is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                        continue;
                    }
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    if (in_array($ext, $allowedExts, true)) {
                        $validFiles[] = $file;
                    }
                }

                if (!empty($validFiles)) {
                    natsort($validFiles);
                    foreach ($validFiles as $file) {
                        $rawName = pathinfo($file, PATHINFO_FILENAME);
                        // Clean up leading numbers or prefixes (e.g. "01-lab-komputer" -> "lab-komputer")
                        $label = trim(preg_replace('/^[0-9]+[\s\-_]*/', '', $rawName));
                        if (empty($label)) {
                            $label = $rawName;
                        }
                        $cleanTitle = ucwords(str_replace(['-', '_'], ' ', $label));

                        $items[] = [
                            'url' => asset("assets/img/{$category}/{$file}"),
                            'name' => $cleanTitle,
                            'filename' => $file,
                        ];
                    }
                    return $items;
                }
            }
        }

        // Use fallbacks
        foreach ($fallbacks as $index => $fb) {
            if (is_array($fb)) {
                $items[] = $fb;
            } else {
                $items[] = [
                    'url' => $fb,
                    'name' => 'Dokumentasi ' . ($index + 1),
                    'filename' => 'fallback-' . ($index + 1),
                ];
            }
        }

        return $items;
    }
}
