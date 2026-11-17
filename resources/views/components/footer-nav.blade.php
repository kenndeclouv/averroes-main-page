@props([
    'title' => null,
    'link' => null,
])

@php
    // Jika title atau link tidak diberikan secara manual, hitung otomatis dari config navigation.flow
    if (empty($title) || empty($link)) {
        $flow = config('navigation.flow', []);
        $currentIndex = -1;

        foreach ($flow as $index => $item) {
            $matched = false;

            if (!empty($item['routes'])) {
                foreach ($item['routes'] as $route) {
                    if (request()->routeIs($route)) {
                        $matched = true;
                        break;
                    }
                }
            }

            if (!$matched && !empty($item['paths'])) {
                foreach ($item['paths'] as $path) {
                    if (request()->is($path)) {
                        $matched = true;
                        break;
                    }
                }
            }

            if ($matched) {
                $currentIndex = $index;
                break;
            }
        }

        if ($currentIndex >= 0 && count($flow) > 0) {
            $nextIndex = ($currentIndex + 1) % count($flow);
            $nextPage = $flow[$nextIndex];
        } else {
            // Default jika halaman saat ini tidak ada di daftar alur
            $nextPage = $flow[0] ?? ['title' => 'Beranda', 'url' => '/'];
        }

        $title = $title ?: ($nextPage['title'] ?? 'Beranda');
        $link = $link ?: ($nextPage['url'] ?? '/');
    }
@endphp

<div class="footer_nav">
    <div class="footer_nav-component">
        <a data-w-id="8603692c-953e-fe61-da56-a8e2e00edba2" href="/contact"
            class="footer_nav-content w-inline-block">
            <div class="footer_nav-content_contact-wrapper">
                <h3 data-anim="title">Perlu Bantuan ?</h3>
                <div class="padding-bottom padding-small"></div>
                <p class="text-color-primary-600 text-size-large">Hubungi admin sekarang !!
                </p>
            </div>
            <div class="footer_nav-content-title-wrapper">
                <div class="footer_nav-content-title-background">Kontak</div>
                <div class="footer_nav-content-title-background">Kontak</div>
                <div class="footer_nav-content-title-background">Kontak</div>
                <div class="footer_nav-content-title-background">Kontak</div>
            </div>
        </a>
        <a id="w-node-_8603692c-953e-fe61-da56-a8e2e00edba7-e00edba1" data-w-id="8603692c-953e-fe61-da56-a8e2e00edba7"
            href="{{ $link }}" class="footer_nav-content-page w-inline-block">
            <div class="footer_nav-content-info">
                <div class="pastille-info"></div>
                <p class="text-color-primary-600">Halaman Selanjutnya</p>
            </div>
            <div class="footer_nav-content-link">
                <div class="footer_nav-content-link-wrapper">
                    <p class="heading-style-h5 text-color-primary">{{ $title }}</p>
                </div>
                <div class="w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20"
                        fill="none">
                        <path
                            d="M0.5 8C0.5 9.933 2.067 11.5 4 11.5H18.3789L12.9395 16.9395L15.0605 19.0605L24.1211 10L15.0605 0.939453L12.9395 3.06055L18.3789 8.5H4C3.72386 8.5 3.5 8.27614 3.5 8V2H0.5V8Z"
                            fill="#E9C62C" />
                    </svg></div>
            </div>
            <div class="footer_nav-content-title-wrapper">
                <div class="footer_nav-content-title-background">{{ $title }}</div>
                <div class="footer_nav-content-title-background">{{ $title }}</div>
                <div class="footer_nav-content-title-background">{{ $title }}</div>
            </div>
        </a>
    </div>
</div>
