<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default SEO Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify the default SEO settings for your application.
    | These will be used as fallbacks if a specific page doesn't define them.
    |
    */

    'site_name' => env('APP_NAME', 'Averroes'),
    'title_suffix' => ' — Averroes Digital Islamic School',

    'default_title' => 'Averroes — Digital Islamic School Malang',
    'default_description' => 'SMK Averroes Digital Islamic School Malang - Sekolah vokasi IT berbasis pesantren yang memadukan Al-Qur\'an, Diniyah, Teknologi Informasi (RPL & DKV), dan Bahasa Global.',

    // Keywords for meta tags
    'keywords' => 'averroes, smk averroes, averroes digital islamic school, pondok it malang, pesantren it malang, rpl malang, dkv malang, ppdb averroes, sekolah digital islami',

    // The primary color used for Discord embeds and mobile browsers
    'theme_color' => '#E9C62C',

    // Default Open Graph image
    'og_image' => env('APP_URL') . '/assets/images/og_image.webp',

    // Default Twitter card username/creator
    'twitter_creator' => '@averroes.is',

    // Google Analytics Measurement ID
    'google_analytics' => env('GOOGLE_ANALYTICS_ID'),
];