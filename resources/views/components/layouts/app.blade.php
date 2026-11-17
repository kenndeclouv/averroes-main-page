@props([
    'title' => config('seo.default_title', config('app.name', 'Averroes')) ,
    'description' => config('seo.default_description'),
    'image' => config('seo.og_image'),
    'keywords' => config('seo.keywords'),
    'navbar' => true,
    'footer' => true,
    'loader'=> true,
])

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  {{-- Core Meta --}}
  <title>{{ str_contains($title, config('app.name', 'Averroes')) ? $title : $title . " — " . config('app.name', 'Averroes') }}</title>
  <meta name="description" content="{{ $description }}">
  @if($keywords)
    <meta name="keywords" content="{{ $keywords }}">
  @endif
  <meta name="theme-color" content="{{ config('seo.theme_color', '#E9C62C') }}">

  {{-- Open Graph / Facebook --}}
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ request()->url() }}">
  <meta property="og:title" content="{{ $title }}">
  <meta property="og:description" content="{{ $description }}">
  @if($image)
    <meta property="og:image" content="{{ $image }}">
  @endif
  <meta property="og:site_name" content="{{ config('seo.site_name', 'Averroes Digital Islamic School') }}">

  {{-- Twitter --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ request()->url() }}">
  <meta name="twitter:title" content="{{ $title }}">
  <meta name="twitter:description" content="{{ $description }}">
  
  @if($image)
    <meta name="twitter:image" content="{{ $image }}">
  @endif
  @if(config('seo.twitter_creator'))
    <meta name="twitter:creator" content="{{ config('seo.twitter_creator') }}">
  @endif

  {{-- Favicon --}}
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/averroes.svg') }}">

  {{-- Font --}}
  <script src="{{ asset('assets/js/webfont.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      custom: {
        families: [
          "Oswald:200,300,400,500,600,700", 
          "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", 
          "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", 
          "Archivo:300,400,500,600,700", 
          "Epilogue:300,400,500,600,700"
        ],
        urls: ["{{ asset('assets/css/fonts.css') }}"]
      }
    });
  </script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>

  {{-- Style --}}
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <x-style />

  {{-- Finsweet Attributes --}}
  <script async type="module" src="{{ asset('assets/js/attributes.js') }}"
    fs-socialshare></script>

  {{-- Barba.js --}}
  <script src="{{ asset('assets/js/barba.core.js') }}"></script>
</head>

<body data-page="{{ request()->is('/') ? 'home' : request()->path() }}" data-barba="wrapper">
  {{-- Loader --}}
  <x-loader />

  {{-- Main Wrapper --}}
  <div id="smooth-wrapper" data-barba="container" data-barba-namespace="{{ request()->is('/') ? 'home' : request()->path() }}" class="page-wrapper">
    <div class="global-styles w-embed">
    </div>
    {{-- NAVBAR --}}
    @if ($navbar)
      <x-navbar />
    @endif

    <main id="smooth-content" class="main-wrapper">
      {{ $slot }}

      {{-- Footer Nav & Footer --}}
      @if ($footer)
        <x-footer-nav :title="$nextPageTitle ?? null" :link="$nextPageLink ?? null" />
        <x-footer />
      @endif

      <div class="section_invisible" style="display: none;"></div>
    </main>
  </div>

  {{-- Script --}}
  <x-script />
</body>

</html>