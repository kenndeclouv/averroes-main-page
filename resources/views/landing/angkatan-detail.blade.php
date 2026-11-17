<x-layouts.app :title="($angkatan['nama'] ?? 'Angkatan ' . $id) . ' - ' . ($angkatan['julukan'] ?? 'Santri Averroes')" :nextPageTitle="'Direktori Angkatan'" :nextPageLink="route('landing.angkatan')">

  {{-- Hero Header (Dark Theme) --}}
  <div class="section_home-hero" style="min-height: 45svh; height: auto; padding: 7rem 0 3.5rem; position: relative; display: flex; align-items: center; justify-content: center; background-color: #1A1A18 !important; overflow: hidden; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 30%, rgba(233,198,44,0.1) 0%, transparent 70%); pointer-events: none;"></div>

    <div class="padding-global" style="position: relative; z-index: 2; width: 100%;">
      <div style="max-width: 820px; margin: 0 auto; text-align: center;">
        
        {{-- Kicker Badge --}}
        <div style="display: inline-flex; align-items: center; gap: 0.6rem; border: 1px solid rgba(233, 198, 44, 0.35); background: rgba(233, 198, 44, 0.08); padding: 0.4rem 1.15rem; border-radius: 999px; margin-bottom: 1.5rem;">
          <span style="width: 8px; height: 8px; border-radius: 50%; background-color: {{ $angkatan['badge_color'] ?? '#22c55e' }}; display: inline-block; box-shadow: 0 0 10px {{ $angkatan['badge_color'] ?? '#22c55e' }};"></span>
          <span style="font-size: 0.75rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
            {{ $angkatan['status'] ?? 'Aktif Belajar' }} • T.A. {{ $angkatan['tahun_ajaran'] ?? '2024/2025' }}
          </span>
        </div>

        {{-- Display Title (Crisp White #FFFFFF) --}}
        <h1 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(3rem, 7vw, 5.5rem); line-height: 0.95; text-transform: uppercase; font-weight: 900; letter-spacing: -0.02em; color: #FFFFFF !important; margin: 0;">
          {{ strtoupper($angkatan['nama'] ?? 'ANGKATAN ' . $id) }}
        </h1>

        {{-- Julukan Moto --}}
        <p style="font-size: clamp(1.15rem, 1.8vw, 1.6rem); font-style: italic; color: var(--background--brand-primary, #E9C62C); margin-top: 1rem; margin-bottom: 0; font-weight: 600;">
          "{{ $angkatan['julukan'] ?? 'Santri Averroes' }}"
        </p>

        {{-- Breadcrumb back --}}
        <div style="margin-top: 2rem;">
          <a href="{{ route('landing.angkatan') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; font-weight: 600; color: #A5A5A0; text-decoration: none; transition: color 0.2s;">
            ← Kembali ke Direktori Angkatan
          </a>
        </div>

      </div>
    </div>
  </div>

  {{-- Komitmen & Sambutan (Light Section) --}}
  <div class="section_home-about" style="background-color: #F8F8F6; padding: 4.5rem 0;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        <div class="home-about_component">
          <div id="w-node-bfb35423-77f3-ccca-fad7-032a2e07973e-310c16e6" class="home-about_content-title">
            <div class="home-about_content-title-container">
              <h2 style="color: #1A1A18 !important; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Komitmen</h2>
            </div>
            <div class="line-h"></div>
          </div>
          <div id="w-node-_3477bf28-a0d8-375a-2330-0a38764a3d63-310c16e6" class="home-about_content-wrapper">
            <div id="w-node-d46a187d-81fb-80aa-de32-f65e8ec2589e-310c16e6" class="content-info_wrapper">
              <p data-anim="paragraph" class="text-align-right text-size-large" style="color: #1A1A18;">
                <b>{{ $angkatan['santri'][0] ?? 'Santri Averroes' }}</b><br />
                <span class="text-style-italic text-size-regular" style="color: #777;">- Perwakilan {{ $angkatan['nama'] }}</span>
              </p>
            </div>
            <div data-anim="line-v" class="line-vertical"></div>
            <div id="w-node-_4722443c-223b-b698-0ffa-9bb57834f037-310c16e6" class="home-about_content">
              <p data-anim="paragraph" class="text-size-large max-width-large max-width-full-tablet text-pretty" style="color: #333330; line-height: 1.7;">
                "{{ $angkatan['deskripsi'] ?? 'Berkomitmen melahirkan santri yang berakhlak mulia, berjiwa mandiri, dan unggul dalam teknologi digital industri.' }}"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Section Daftar Santri (Dark Theme) --}}
  <div class="section_santri-grid" style="background-color: #141412 !important; padding: 5rem 0 6rem; border-top: 1px solid rgba(255,255,255,0.08);">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        
        {{-- Section Subhead Bar --}}
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 2.5rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.08);">
          <div>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.35rem;">
              <span style="color: var(--background--brand-primary, #E9C62C);">✦</span>
              <span style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
                Data Santri ADIS
              </span>
            </div>
            <h2 style="margin: 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.75rem, 3.5vw, 2.5rem); font-weight: 900; color: #FFFFFF !important; text-transform: uppercase;">
              Daftar Santri {{ $angkatan['nama'] }}
            </h2>
          </div>
          <div style="display: flex; align-items: center; gap: 0.75rem;">
            <span style="font-size: 0.8rem; color: #888;">Total Terdata:</span>
            <span style="font-size: 0.8rem; font-weight: 700; color: #E9C62C; background: rgba(233,198,44,0.12); border: 1px solid rgba(233,198,44,0.3); padding: 0.25rem 0.75rem; border-radius: 999px;">
              {{ count($angkatan['santri'] ?? []) }} Santri
            </span>
          </div>
        </div>

        {{-- Santri Grid --}}
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
          @foreach(($angkatan['santri'] ?? []) as $index => $namaSantri)
            @php
              // Initial name avatar
              $parts = explode(' ', trim($namaSantri));
              $initials = '';
              if (count($parts) >= 2) {
                $initials = strtoupper(substr($parts[0], 0, 1) . substr($parts[1], 0, 1));
              } else {
                $initials = strtoupper(substr($namaSantri, 0, 2));
              }
            @endphp
            <div class="santri_card" style="background: #1B1B19; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem; transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;">
              
              {{-- Avatar Circle --}}
              <div style="width: 52px; height: 52px; min-width: 52px; border-radius: 50%; background: linear-gradient(135deg, rgba(233,198,44,0.2) 0%, rgba(20,20,18,0.8) 100%); border: 1px solid rgba(233,198,44,0.4); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.05rem; color: #E9C62C;">
                {{ $initials }}
              </div>

              {{-- Info --}}
              <div style="flex: 1; min-width: 0;">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.25rem;">
                  <span style="font-size: 0.7rem; font-weight: 700; color: rgba(255,255,255,0.4); font-family: monospace;">
                    #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                  </span>
                  <span style="font-size: 0.68rem; background: rgba(255,255,255,0.06); padding: 0.15rem 0.5rem; border-radius: 4px; color: #BBB;">
                    Santri
                  </span>
                </div>
                <h4 style="margin: 0; font-size: 1rem; font-weight: 700; color: #FFFFFF; line-height: 1.35; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ $namaSantri }}">
                  {{ $namaSantri }}
                </h4>
              </div>

            </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>

  {{-- Struktur Angkatan (Section Team Interaktif) --}}
  <div data-w-id="189cb825-33ef-d943-220f-b0ef13ab9f57" class="section_team">
    <div class="team_component">
      <div class="team_content">
        <p data-anim="paragraph" class="heading-style-h5">Struktur Kepengurusan Santri<br /></p>
        <div class="padding-bottom padding-xsmall"></div>
        <p data-anim="paragraph" class="text-align-center">Averroes Digital Islamic School — {{ $angkatan['nama'] }}<br /></p>
      </div>
      <div class="team_content">
        <div data-anim="paragraph" class="text-color-brand text-style-allcaps text-style-italic">{{ $angkatan['nama'] }} - {{ $angkatan['julukan'] }}</div>
        <div class="padding-bottom padding-large"></div>
        <div data-w-id="cf43fbab-0dca-4b26-15c7-812a6e5b2792"
          style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
          class="line-horizontal"></div>
        <div class="team_content_title-wrapper">
          <h2 class="text-color-secondary" style="font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Struktur</h2>
          <div class="flex-embed is-absolute w-embed">
          </div>
        </div>
        <div class="line-horizontal is-up"></div>
        <div class="padding-bottom padding-large"></div>
      </div>
      <div class="team_content is-600">
        <div class="team_content_tag-wrapper">
          @foreach(($angkatan['struktur'] ?? []) as $st)
            <p data-anim="paragraph" class="text-style-allcaps text-size-small">[{{ $st['tag'] ?? $st['role_short'] ?? 'Santri' }}]<br /></p>
          @endforeach
        </div>
      </div>
    </div>
    <div class="team_background-wrapper">
      @php
        $gridNodeIds = [
          1 => 'w-node-_7d98ab08-542c-7629-b5c2-2817d1950ede-310c16e6',
          2 => 'w-node-bbcdd4d3-7f94-01b7-9182-793e174924ba-310c16e6',
          3 => 'w-node-_5a97dddd-afc7-f16f-6bba-c32fec1859fa-310c16e6',
          4 => 'w-node-_4aa4f698-187b-63b7-0466-45bca039ff95-310c16e6',
          5 => 'w-node-a87c8243-6602-fe34-1cd6-80cfa6a090e9-310c16e6',
          6 => 'w-node-_2904bcb0-ad38-aebd-1afb-b93aa4997ddf-310c16e6',
        ];
      @endphp

      @foreach(($angkatan['struktur'] ?? []) as $index => $st)
        @php
          $num = $index + 1;
          $nodeId = $gridNodeIds[$num] ?? ('node-' . $num);
          $placeholderLabel = urlencode($st['role_short'] ?? $st['tag'] ?? 'Santri');
          $imgUrl = 'https://placehold.co/250x325/1a1a18/e9c62c?text=' . $placeholderLabel;
        @endphp
        <div id="{{ $nodeId }}" class="team_background-card is-{{ $num }}">
          <div data-anim="image-wrapper" class="team_background-card_image-wrapper">
            <img class="team_background-card_image" src="{{ $imgUrl }}" alt="Foto {{ $st['nama'] }}" />
            <div class="team_background-card_image-shadow"></div>
          </div>
          <div class="team_background-card_square"></div>
          <div class="team_background-card_square is-top-right"></div>
          <div class="team_background-card_square is-bottom-right"></div>
          <div class="team_background-card_square is-bottom-left"></div>
          <div class="team_background-card_content" style="background: linear-gradient(180deg, transparent 0%, rgba(15,15,14,0.92) 65%, rgba(10,10,9,0.98) 100%);">
            <h3 class="heading-style-h5" style="color: #FFFFFF !important; font-size: 1.05rem; line-height: 1.25; margin: 0; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">
              {{ $st['nama'] }}
            </h3>
            <div class="padding-bottom padding-xsmall"></div>
            <p class="text-size-tiny" style="color: #E9C62C !important; font-weight: 700; margin: 0; text-transform: uppercase; letter-spacing: 0.05em;">
              {{ $st['jabatan'] }}
            </p>
          </div>
        </div>
      @endforeach

      <div id="w-node-ed69a261-d3f2-d119-977d-ead008d95992-310c16e6" class="flex-embed is-mobile-little w-embed">
        <img src="{{ asset('assets/img/averroes.svg') }}" alt="" width="256" height="256">
      </div>
    </div>
  </div>

  {{-- Galeri Karya & Kegiatan (Dark Accent Photo Slider) --}}
  @php
    $karyaGallery = averroes_gallery('karya', [
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Project+Web+%26+Mobile', 'name' => 'Project Web & Mobile'],
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Design+Branding+%26+UI', 'name' => 'Design & Branding'],
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Kajian+Kitab+Kuning', 'name' => 'Kajian & Halaqah'],
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Coding+Bootcamp', 'name' => 'Bootcamp Coding'],
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Karya+Seni+Santri', 'name' => 'Karya Digital'],
      ['url' => 'https://placehold.co/800x520/1e1e1b/e9c62c?text=Dokumentasi+Santri', 'name' => 'Aktivitas Angkatan'],
    ]);
    $karyaCount = count($karyaGallery);
  @endphp
  <div class="section_projets-hero" style="background-color: #141412 !important; padding: 5rem 0 5.5rem; border-top: 1px solid rgba(255,255,255,0.08); overflow: hidden;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2.5rem;">
          <div>
            <span style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
              Dokumentasi & Portofolio
            </span>
            <h2 style="margin: 0.5rem 0 0 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: #FFFFFF !important; text-transform: uppercase;">
              KARYA & KEGIATAN SANTRI
            </h2>
            <p style="max-width: 580px; margin: 0.75rem 0 0; line-height: 1.6; color: rgba(255,255,255,0.65); font-size: 0.95rem;">
              Eksplorasi karya inovatif, proyek coding dan desain, serta rekam jejak aktivitas harian santri angkatan.
            </p>
          </div>
          <div class="averroes-slider-controls">
            <span class="averroes-slider-counter is-dark" id="karya-counter">01 / {{ str_pad($karyaCount, 2, '0', STR_PAD_LEFT) }}</span>
            <button type="button" class="averroes-slider-btn is-dark prev" id="karya-prev" aria-label="Foto Sebelumnya">←</button>
            <button type="button" class="averroes-slider-btn is-dark next" id="karya-next" aria-label="Foto Berikutnya">→</button>
          </div>
        </div>
        
        <div class="averroes-slider-container">
          <div class="averroes-slider-track" id="karya-track">
            @foreach($karyaGallery as $item)
              <div class="averroes-slide-card is-dark" data-index="{{ $loop->iteration }}">
                <img src="{{ $item['url'] }}" alt="{{ $item['name'] }}" loading="lazy">
                <div class="averroes-slide-overlay"></div>
                <div class="averroes-slide-badge">
                  {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                </div>
                <div class="averroes-slide-title">
                  <h3>{{ $item['name'] }}</h3>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </div>

  <style>
    .santri_card:hover {
      border-color: rgba(233,198,44,0.4) !important;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.45) !important;
    }
  </style>
</x-layouts.app>
