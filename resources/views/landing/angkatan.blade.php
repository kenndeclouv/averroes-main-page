<x-layouts.app :title="'Direktori Angkatan'">

  @php
    $themes = [
      1 => [
        // 1. GELAP (#141412)
        'bg' => '#141412',
        'text' => '#FFFFFF',
        'subtext' => '#A5A5A0',
        'accent' => '#E9C62C',
        'tag_border' => 'rgba(233, 198, 44, 0.35)',
        'tag_bg' => 'rgba(233, 198, 44, 0.12)',
        'card_bg' => 'rgba(255, 255, 255, 0.04)',
        'card_border' => 'rgba(255, 255, 255, 0.1)',
        'quote_bg' => 'rgba(255, 255, 255, 0.03)',
        'quote_border' => 'rgba(255, 255, 255, 0.1)',
        'quote_bar' => '#E9C62C',
        'btn_bg' => '#E9C62C',
        'btn_color' => '#141412',
        'badge_bg' => 'rgba(255, 255, 255, 0.08)',
        'badge_border' => 'rgba(255, 255, 255, 0.15)',
        'badge_color' => '#FFFFFF',
        'watermark' => 'rgba(255, 255, 255, 0.03)',
        'chip_bg' => 'rgba(255, 255, 255, 0.05)',
        'chip_border' => 'rgba(255, 255, 255, 0.1)',
        'chip_color' => '#DCDCD8',
        'border_bottom' => 'rgba(255, 255, 255, 0.1)',
        'next_link_color' => '#888',
      ],
      2 => [
        // 2. KUNING PRIMARY (#E9C62C)
        'bg' => '#E9C62C',
        'text' => '#1A1A18',
        'subtext' => '#2A2A26',
        'accent' => '#1A1A18',
        'tag_border' => 'rgba(26, 26, 24, 0.4)',
        'tag_bg' => 'rgba(26, 26, 24, 0.1)',
        'card_bg' => 'rgba(255, 255, 255, 0.55)',
        'card_border' => 'rgba(26, 26, 24, 0.18)',
        'quote_bg' => 'rgba(255, 255, 255, 0.65)',
        'quote_border' => 'rgba(26, 26, 24, 0.2)',
        'quote_bar' => '#1A1A18',
        'btn_bg' => '#1A1A18',
        'btn_color' => '#FFFFFF',
        'badge_bg' => 'rgba(26, 26, 24, 0.12)',
        'badge_border' => 'rgba(26, 26, 24, 0.25)',
        'badge_color' => '#1A1A18',
        'watermark' => 'rgba(26, 26, 24, 0.07)',
        'chip_bg' => 'rgba(255, 255, 255, 0.75)',
        'chip_border' => 'rgba(26, 26, 24, 0.2)',
        'chip_color' => '#1A1A18',
        'border_bottom' => 'rgba(26, 26, 24, 0.15)',
        'next_link_color' => '#1A1A18',
      ],
    ];

    // 3. PUTIH YANG BIASA KITA PAKE (#F8F8F6)
    $ppdbTheme = [
      'bg' => '#F8F8F6',
      'text' => '#1A1A18',
      'subtext' => '#555550',
      'accent' => '#B38F00',
      'tag_border' => 'rgba(179, 143, 0, 0.35)',
      'tag_bg' => 'rgba(233, 198, 44, 0.12)',
      'card_bg' => '#FFFFFF',
      'card_border' => 'rgba(0, 0, 0, 0.1)',
      'quote_bg' => '#FFFFFF',
      'quote_border' => 'rgba(0, 0, 0, 0.1)',
      'quote_bar' => '#E9C62C',
      'btn_bg' => '#1A1A18',
      'btn_color' => '#FFFFFF',
      'badge_bg' => '#1A1A18',
      'badge_border' => '#1A1A18',
      'badge_color' => '#FFFFFF',
      'watermark' => 'rgba(0, 0, 0, 0.035)',
      'border_bottom' => 'rgba(0, 0, 0, 0.1)',
    ];
  @endphp

  {{-- Floating Quick Navigator (Ngotak, Right Edge) --}}
  <div class="angkatan-nav-dots" style="position: fixed; right: 1.5rem; top: 50%; transform: translateY(-50%); z-index: 99; display: flex; flex-direction: column; gap: 0.5rem; pointer-events: auto;">
    @foreach($angkatans as $angId => $ang)
      <a href="#wrapper-angkatan-{{ $angId }}" class="angkatan-dot {{ $loop->first ? 'is-active' : '' }}" data-target="angkatan-{{ $angId }}" title="{{ $ang['nama'] }} - {{ $ang['julukan'] }}">
        0{{ $angId }}
      </a>
    @endforeach
    <a href="#wrapper-angkatan-ppdb" class="angkatan-dot" data-target="angkatan-ppdb" title="PPDB &amp; Angkatan Selanjutnya">
      PPDB
    </a>
  </div>

  {{-- STACKING SECTIONS: 1 SECTION = 1 ANGKATAN --}}
  <div class="angkatan-stack-wrapper" style="position: relative; width: 100%;">
    
    @foreach($angkatans as $angId => $ang)
      @php
        $theme = $themes[$angId] ?? $themes[1];
        $studentCount = count($ang['santri'] ?? []);
        $isFirst = ($angId == 1);
        $nextWrapperId = ($angId < count($angkatans)) ? 'wrapper-angkatan-' . ($angId + 1) : 'wrapper-angkatan-ppdb';
      @endphp

      {{-- Section Wrapper: height 140vh ensures runway buffer space before next section slides over --}}
      <div class="angkatan-panel-wrapper" id="wrapper-angkatan-{{ $angId }}" style="position: relative; width: 100%; height: 140vh;">
        
        <section class="angkatan-panel" id="angkatan-{{ $angId }}" data-index="{{ $loop->iteration }}" style="position: sticky; top: 0; z-index: {{ $loop->iteration }}; background-color: {{ $theme['bg'] }}; color: {{ $theme['text'] }}; height: 100vh; width: 100%; display: flex; align-items: center; justify-content: center; padding: clamp(4.5rem, 6vh, 5.5rem) 0 clamp(1.5rem, 2.5vh, 2.5rem); box-shadow: 0 -16px 40px rgba(0,0,0,0.35); overflow: hidden;">
          
          {{-- Giant Ghost Number / Watermark --}}
          <div style="position: absolute; right: 1%; bottom: -4%; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(8rem, 24vw, 26rem); font-weight: 900; line-height: 0.8; color: {{ $theme['watermark'] }}; pointer-events: none; user-select: none; z-index: 1;">
            0{{ $angId }}
          </div>

          <div class="padding-global angkatan-panel_inner" style="position: relative; z-index: 2; width: 100%;">
            <div style="max-width: 1260px; margin: 0 auto;">
              
              {{-- Top Meta Bar --}}
              <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem; border-bottom: 1px solid {{ $theme['border_bottom'] }}; padding-bottom: 0.85rem; margin-bottom: clamp(1rem, 1.8vh, 1.75rem);">
                <div style="display: flex; align-items: center; gap: 0.65rem;">
                  <span style="display: inline-block; width: 7px; height: 7px; background: {{ $theme['accent'] }};"></span>
                  <span style="font-size: 0.72rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: {{ $theme['accent'] }};">
                    DIREKTORI ANGKATAN • 0{{ $angId }} / 0{{ count($angkatans) + 1 }}
                  </span>
                </div>
                
                <div style="display: flex; align-items: center; gap: 0.65rem;">
                  <span style="font-size: 0.7rem; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; color: {{ $theme['badge_color'] }}; background: {{ $theme['badge_bg'] }}; border: 1px solid {{ $theme['badge_border'] }}; padding: 0.25rem 0.65rem; border-radius: 0;">
                    {{ $ang['status'] ?? 'Aktif Belajar' }}
                  </span>
                  <span style="font-size: 0.7rem; font-weight: 800; color: {{ $theme['accent'] }}; border: 1px solid {{ $theme['tag_border'] }}; background: {{ $theme['tag_bg'] }}; padding: 0.25rem 0.65rem; border-radius: 0;">
                    T.A. {{ $ang['tahun_ajaran'] ?? '2024/2025' }}
                  </span>
                </div>
              </div>

              {{-- Main Two-Column Asymmetric Grid --}}
              <div class="angkatan-grid" style="display: grid; grid-template-columns: 1.15fr 1fr; gap: clamp(1.5rem, 3.5vw, 3.5rem); align-items: center;">
                
                {{-- Left Column: Identity, Narrative & Actions --}}
                <div>
                  
                  {{-- Number Badge & Julukan Title --}}
                  <div style="margin-bottom: 0.85rem;">
                    <div style="display: inline-flex; align-items: center; gap: 0.4rem; background: {{ $theme['tag_bg'] }}; border: 1px solid {{ $theme['tag_border'] }}; padding: 0.2rem 0.6rem; border-radius: 0; margin-bottom: 0.5rem;">
                      <span style="font-size: 0.68rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: {{ $theme['accent'] }};">
                        Pilar Generasi
                      </span>
                    </div>

                    <h2 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2.2rem, 4.2vw, 3.85rem); line-height: 0.95; font-weight: 900; text-transform: uppercase; letter-spacing: -0.02em; color: {{ $theme['text'] }}; margin: 0 0 0.35rem 0;">
                      {{ $ang['nama'] }}
                    </h2>
                    <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.4rem, 2.5vw, 2.25rem); font-weight: 900; text-transform: uppercase; color: {{ $theme['accent'] }}; line-height: 1;">
                      "{{ $ang['julukan'] }}"
                    </div>
                  </div>

                  {{-- Description Quote Box (100% Ngotak, Square) --}}
                  <div style="background: {{ $theme['quote_bg'] }}; border: 1px solid {{ $theme['quote_border'] }}; border-left: 5px solid {{ $theme['quote_bar'] }}; border-radius: 0; padding: 1rem 1.25rem; margin-bottom: 1.15rem;">
                    <p style="font-size: clamp(0.88rem, 1.05vw, 0.98rem); line-height: 1.6; color: {{ $theme['subtext'] }}; margin: 0; font-weight: 500;">
                      "{{ $ang['deskripsi'] ?? 'Santri Averroes Digital Islamic School dengan penguasaan kompetensi IT dan nilai-nilai Qur\'ani.' }}"
                    </p>
                  </div>

                  {{-- Key Stats Cards (100% Ngotak, Square) --}}
                  <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.65rem; margin-bottom: 1.35rem;">
                    <div style="background: {{ $theme['card_bg'] }}; border: 1px solid {{ $theme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                      <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $theme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Kapasitas</span>
                      <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $theme['text'] }}; font-family: var(--_font---font-family--heading, sans-serif);">{{ $studentCount }} Santri</strong>
                    </div>
                    <div style="background: {{ $theme['card_bg'] }}; border: 1px solid {{ $theme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                      <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $theme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Jurusan</span>
                      <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $theme['accent'] }}; font-family: var(--_font---font-family--heading, sans-serif);">RPL &amp; DKV</strong>
                    </div>
                    <div style="background: {{ $theme['card_bg'] }}; border: 1px solid {{ $theme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                      <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $theme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Model</span>
                      <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $theme['text'] }}; font-family: var(--_font---font-family--heading, sans-serif);">Pesantren IT</strong>
                    </div>
                  </div>

                  {{-- Action Buttons (100% Ngotak, Square) --}}
                  <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 0.85rem;">
                    <a href="{{ route('landing.angkatan.show', $angId) }}" style="display: inline-flex; align-items: center; gap: 0.65rem; background: {{ $theme['btn_bg'] }}; color: {{ $theme['btn_color'] }}; font-weight: 900; font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase; padding: 0.85rem 1.5rem; border-radius: 0; text-decoration: none; transition: transform 0.2s, opacity 0.2s;">
                      <span>Lihat Struktur &amp; Santri</span>
                      <span>➔</span>
                    </a>

                    <a href="#{{ $nextWrapperId }}" onclick="event.preventDefault(); typeof lenis !== 'undefined' ? lenis.scrollTo('#{{ $nextWrapperId }}') : document.getElementById('{{ $nextWrapperId }}').scrollIntoView({behavior:'smooth'});" style="display: inline-flex; align-items: center; gap: 0.35rem; color: {{ $theme['next_link_color'] }}; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; text-decoration: none; padding: 0.75rem 0.5rem;">
                      <span>{{ ($angId < count($angkatans)) ? 'Scroll Angkatan ' . ($angId + 1) : 'PPDB Selanjutnya' }} ↓</span>
                    </a>
                  </div>

                </div>

                {{-- Right Column: Visual Showcase & Leadership Preview (100% Ngotak) --}}
                <div>
                  <div style="background: {{ $theme['card_bg'] }}; border: 1px solid {{ $theme['card_border'] }}; border-radius: 0; padding: clamp(1rem, 1.8vw, 1.35rem); display: flex; flex-direction: column; gap: 1rem;">
                    
                    {{-- Hero Visual / Photo Container (100% Ngotak) --}}
                    <div style="position: relative; width: 100%; height: clamp(170px, 19vh, 215px); background: #141412; border: 1px solid {{ $theme['card_border'] }}; border-radius: 0; overflow: hidden;">
                      @if($isFirst)
                        <img src="{{ asset('assets/img/angkatan-1.jpg') }}" alt="{{ $ang['nama'] }} - {{ $ang['julukan'] }}" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.95);">
                      @else
                        {{-- Angkatan 2 Visual Box (Bold Brutalist Dark Block on Yellow) --}}
                        <div style="width: 100%; height: 100%; background: #141412; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 1.5rem; position: relative;">
                          <div style="width: 50px; height: 50px; border: 1.5px solid #E9C62C; display: flex; align-items: center; justify-content: center; color: #E9C62C; font-size: 1.4rem; margin-bottom: 0.5rem; border-radius: 0;">
                            ✦
                          </div>
                          <span style="font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.35rem; font-weight: 900; text-transform: uppercase; color: #FFFFFF; letter-spacing: 0.05em;">
                            {{ $ang['nama'] }}
                          </span>
                          <span style="font-size: 0.8rem; color: #E9C62C; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; margin-top: 0.2rem;">
                            "{{ $ang['julukan'] }}"
                          </span>
                        </div>
                      @endif

                      <div style="position: absolute; bottom: 0.65rem; left: 0.65rem; right: 0.65rem; display: flex; align-items: center; justify-content: space-between; background: rgba(0,0,0,0.82); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); padding: 0.4rem 0.75rem; border: 1px solid rgba(255,255,255,0.15); border-radius: 0;">
                        <span style="font-size: 0.68rem; font-weight: 800; color: #E9C62C; text-transform: uppercase;">
                          Struktur Santri
                        </span>
                        <span style="font-size: 0.68rem; color: #FFFFFF;">
                          Ketua: <b>{{ $ang['struktur'][0]['nama'] ?? 'Ahmad Fulan' }}</b>
                        </span>
                      </div>
                    </div>

                    {{-- Leadership Structure Preview (Ketua & Wakil) --}}
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.65rem;">
                      @foreach(array_slice($ang['struktur'] ?? [], 0, 2) as $pimpinan)
                        <div style="background: {{ $theme['card_bg'] }}; border: 1px solid {{ $theme['card_border'] }}; border-left: 3px solid {{ $theme['accent'] }}; padding: 0.65rem 0.75rem; border-radius: 0;">
                          <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $theme['accent'] }}; display: block; margin-bottom: 0.15rem;">
                            {{ $pimpinan['jabatan'] }}
                          </span>
                          <strong style="font-size: 0.78rem; color: {{ $theme['text'] }}; display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $pimpinan['nama'] }}
                          </strong>
                        </div>
                      @endforeach
                    </div>

                    {{-- Santri Roster Preview Chips (100% Ngotak) --}}
                    <div style="border-top: 1px solid {{ $theme['card_border'] }}; padding-top: 0.75rem;">
                      <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-size: 0.68rem; font-weight: 800; text-transform: uppercase; color: {{ $theme['subtext'] }}; letter-spacing: 0.08em;">
                          Daftar Santri ({{ $studentCount }})
                        </span>
                        <a href="{{ route('landing.angkatan.show', $angId) }}" style="font-size: 0.68rem; font-weight: 800; color: {{ $theme['accent'] }}; text-decoration: none; text-transform: uppercase;">
                          Semua Santri ➔
                        </a>
                      </div>
                      <div style="display: flex; flex-wrap: wrap; gap: 0.3rem;">
                        @foreach(array_slice($ang['santri'] ?? [], 0, 6) as $santriName)
                          <span style="font-size: 0.72rem; background: {{ $theme['chip_bg'] }}; border: 1px solid {{ $theme['chip_border'] }}; padding: 0.2rem 0.5rem; border-radius: 0; color: {{ $theme['chip_color'] }};">
                            {{ $santriName }}
                          </span>
                        @endforeach
                        @if($studentCount > 6)
                          <span style="font-size: 0.72rem; background: {{ $theme['tag_bg'] }}; border: 1px solid {{ $theme['tag_border'] }}; color: {{ $theme['accent'] }}; padding: 0.2rem 0.5rem; border-radius: 0; font-weight: 800;">
                            +{{ $studentCount - 6 }} Lainnya
                          </span>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </div>
        </section>

      </div>
    @endforeach

    {{-- FINAL SECTION: ANGKATAN 3 & 4 (PPDB / PUTIH YANG BIASA KITA PAKE #F8F8F6) --}}
    <div class="angkatan-panel-wrapper" id="wrapper-angkatan-ppdb" style="position: relative; width: 100%; min-height: 100vh;">
      
      <section class="angkatan-panel" id="angkatan-ppdb" data-index="{{ count($angkatans) + 1 }}" style="position: relative; z-index: {{ count($angkatans) + 1 }}; background-color: {{ $ppdbTheme['bg'] }}; color: {{ $ppdbTheme['text'] }}; min-height: 100vh; width: 100%; display: flex; align-items: center; justify-content: center; padding: clamp(4.5rem, 6vh, 5.5rem) 0 clamp(2rem, 3vh, 3rem); box-shadow: 0 -16px 40px rgba(0,0,0,0.15); overflow: hidden;">
        
        {{-- Giant Ghost Number / Watermark --}}
        <div style="position: absolute; right: 1%; bottom: -4%; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(8rem, 24vw, 26rem); font-weight: 900; line-height: 0.8; color: {{ $ppdbTheme['watermark'] }}; pointer-events: none; user-select: none; z-index: 1;">
          03&amp;04
        </div>

        <div class="padding-global angkatan-panel_inner" style="position: relative; z-index: 2; width: 100%;">
          <div style="max-width: 1260px; margin: 0 auto;">
            
            {{-- Top Meta Bar --}}
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem; border-bottom: 1px solid {{ $ppdbTheme['border_bottom'] }}; padding-bottom: 0.85rem; margin-bottom: clamp(1rem, 1.8vh, 1.75rem);">
              <div style="display: flex; align-items: center; gap: 0.65rem;">
                <span style="display: inline-block; width: 7px; height: 7px; background: {{ $ppdbTheme['accent'] }};"></span>
                <span style="font-size: 0.72rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: {{ $ppdbTheme['accent'] }};">
                  PENERIMAAN SANTRI BARU • ANGKATAN SELANJUTNYA
                </span>
              </div>
              
              <div style="display: flex; align-items: center; gap: 0.65rem;">
                <span style="font-size: 0.7rem; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; color: {{ $ppdbTheme['badge_color'] }}; background: {{ $ppdbTheme['badge_bg'] }}; border: 1px solid {{ $ppdbTheme['badge_border'] }}; padding: 0.25rem 0.65rem; border-radius: 0;">
                  PPDB Terbuka
                </span>
                <span style="font-size: 0.7rem; font-weight: 800; color: {{ $ppdbTheme['accent'] }}; border: 1px solid {{ $ppdbTheme['tag_border'] }}; background: {{ $ppdbTheme['tag_bg'] }}; padding: 0.25rem 0.65rem; border-radius: 0;">
                  T.A. 2027/2028
                </span>
              </div>
            </div>

            {{-- Two-Column Grid --}}
            <div class="angkatan-grid" style="display: grid; grid-template-columns: 1.15fr 1fr; gap: clamp(1.5rem, 3.5vw, 3.5rem); align-items: center;">
              
              {{-- Left Column: PPDB Callout --}}
              <div>
                <div style="display: inline-flex; align-items: center; gap: 0.4rem; background: {{ $ppdbTheme['tag_bg'] }}; border: 1px solid {{ $ppdbTheme['tag_border'] }}; padding: 0.2rem 0.6rem; border-radius: 0; margin-bottom: 0.5rem;">
                  <span style="font-size: 0.68rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: {{ $ppdbTheme['accent'] }};">
                    Generasi Masa Depan
                  </span>
                </div>

                <h2 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2.2rem, 4.2vw, 3.85rem); line-height: 0.95; font-weight: 900; text-transform: uppercase; letter-spacing: -0.02em; color: {{ $ppdbTheme['text'] }}; margin: 0 0 0.35rem 0;">
                  Angkatan 3 &amp; 4
                </h2>
                <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.4rem, 2.5vw, 2.25rem); font-weight: 900; text-transform: uppercase; color: {{ $ppdbTheme['accent'] }}; line-height: 1; margin-bottom: 0.85rem;">
                  "Next Generation"
                </div>

                <div style="background: {{ $ppdbTheme['quote_bg'] }}; border: 1px solid {{ $ppdbTheme['quote_border'] }}; border-left: 5px solid {{ $ppdbTheme['quote_bar'] }}; border-radius: 0; padding: 1rem 1.25rem; margin-bottom: 1.15rem;">
                  <p style="font-size: clamp(0.88rem, 1.05vw, 0.98rem); line-height: 1.6; color: {{ $ppdbTheme['subtext'] }}; margin: 0; font-weight: 500;">
                    Saatnya giliranmu menjadi generasi santri ahli IT berikutnya. Raih kesempatan beasiswa penuh 100%, pembinaan tahfidz Al-Qur'an terintegrasi, dan penguasaan digital industri global.
                  </p>
                </div>

                {{-- Key Highlights --}}
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.65rem; margin-bottom: 1.35rem;">
                  <div style="background: {{ $ppdbTheme['card_bg'] }}; border: 1px solid {{ $ppdbTheme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                    <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $ppdbTheme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Beasiswa</span>
                    <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $ppdbTheme['accent'] }}; font-family: var(--_font---font-family--heading, sans-serif);">Hingga 100%</strong>
                  </div>
                  <div style="background: {{ $ppdbTheme['card_bg'] }}; border: 1px solid {{ $ppdbTheme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                    <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $ppdbTheme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Gelombang 1</span>
                    <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $ppdbTheme['text'] }}; font-family: var(--_font---font-family--heading, sans-serif);">Diskon 50%</strong>
                  </div>
                  <div style="background: {{ $ppdbTheme['card_bg'] }}; border: 1px solid {{ $ppdbTheme['card_border'] }}; border-radius: 0; padding: 0.65rem 0.8rem;">
                    <span style="font-size: 0.62rem; font-weight: 800; text-transform: uppercase; color: {{ $ppdbTheme['subtext'] }}; display: block; margin-bottom: 0.15rem;">Jurusan</span>
                    <strong style="font-size: 1.05rem; font-weight: 900; color: {{ $ppdbTheme['accent'] }}; font-family: var(--_font---font-family--heading, sans-serif);">RPL &amp; DKV</strong>
                  </div>
                </div>

                {{-- CTA Button --}}
                <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 0.85rem;">
                  <a href="https://wa.me/6288999999744?text=Halo%20Admin%20Averroes,%20saya%20ingin%20tanya%20informasi%20PPDB%20Angkatan%20Selanjutnya" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 0.65rem; background: {{ $ppdbTheme['btn_bg'] }}; color: {{ $ppdbTheme['btn_color'] }}; font-weight: 900; font-size: 0.78rem; letter-spacing: 0.08em; text-transform: uppercase; padding: 0.85rem 1.5rem; border-radius: 0; text-decoration: none; transition: transform 0.2s, opacity 0.2s;">
                    <span>Daftar PPDB Via WhatsApp</span>
                    <span>➔</span>
                  </a>
                  <span style="font-size: 0.75rem; color: {{ $ppdbTheme['subtext'] }};">
                    Hotline: <a href="https://wa.me/6288999999744" target="_blank" rel="noopener" style="color: inherit; text-decoration: none;"><b>+62 889 9999 9744</b></a>
                  </span>
                </div>
              </div>

              {{-- Right Column: 4 Bento Cards of PPDB Advantage (100% Ngotak, Square) --}}
              <div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">
                  
                  <div style="background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-top: 3px solid #E9C62C; padding: 1.15rem 1rem; border-radius: 0;">
                    <span style="font-size: 0.65rem; font-weight: 800; color: #B38F00; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">01 / BEASISWA</span>
                    <strong style="font-size: 0.92rem; color: #1A1A18; display: block; margin-bottom: 0.25rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Beasiswa 100%</strong>
                    <span style="font-size: 0.78rem; color: #666; line-height: 1.45; display: block;">Tersedia jalur Tahfidz Qur'an &amp; Yatim / Dhuafa berprestasi.</span>
                  </div>

                  <div style="background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-top: 3px solid #1A1A18; padding: 1.15rem 1rem; border-radius: 0;">
                    <span style="font-size: 0.65rem; font-weight: 800; color: #1A1A18; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">02 / KEJURUAN</span>
                    <strong style="font-size: 0.92rem; color: #1A1A18; display: block; margin-bottom: 0.25rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">RPL &amp; DKV</strong>
                    <span style="font-size: 0.78rem; color: #666; line-height: 1.45; display: block;">Rekayasa Perangkat Lunak dan Desain Komunikasi Visual industri.</span>
                  </div>

                  <div style="background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-top: 3px solid #1A1A18; padding: 1.15rem 1rem; border-radius: 0;">
                    <span style="font-size: 0.65rem; font-weight: 800; color: #1A1A18; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">03 / BENEFIT AWAL</span>
                    <strong style="font-size: 0.92rem; color: #1A1A18; display: block; margin-bottom: 0.25rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Diskon 50%</strong>
                    <span style="font-size: 0.78rem; color: #666; line-height: 1.45; display: block;">Potongan biaya pendaftaran 50% khusus di Gelombang 1.</span>
                  </div>

                  <div style="background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-top: 3px solid #E9C62C; padding: 1.15rem 1rem; border-radius: 0;">
                    <span style="font-size: 0.65rem; font-weight: 800; color: #B38F00; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">04 / KURIKULUM</span>
                    <strong style="font-size: 0.92rem; color: #1A1A18; display: block; margin-bottom: 0.25rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Q-TechLingual</strong>
                    <span style="font-size: 0.78rem; color: #666; line-height: 1.45; display: block;">Integrasi Al-Qur'an Diniyah, IT Kejuruan, dan Bahasa Asing.</span>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

    </div>

  </div>

  <style>
    /* Strict Brutalist: Zero rounded corners */
    .angkatan-panel,
    .angkatan-panel *,
    .angkatan-dot {
      border-radius: 0 !important;
    }

    .angkatan-dot {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      background: #1B1B19;
      border: 1px solid rgba(255,255,255,0.25);
      color: #FFF;
      font-size: 0.72rem;
      font-weight: 800;
      text-decoration: none;
      border-radius: 0;
      transition: all 0.2s;
    }

    .angkatan-dot:hover,
    .angkatan-dot.is-active {
      background: #E9C62C !important;
      border-color: #E9C62C !important;
      color: #111110 !important;
      transform: scale(1.08);
    }

    @media screen and (max-width: 991px) {
      .angkatan-panel-wrapper {
        height: auto !important;
      }
      .angkatan-panel {
        position: relative !important;
        height: auto !important;
        min-height: auto !important;
        padding: 5rem 0 3.5rem !important;
      }
      .angkatan-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
      }
      .angkatan-nav-dots {
        display: none !important;
      }
    }
  </style>

  {{-- GSAP ScrollTrigger: Stacking Sections Effect with runway buffer --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
      }

      let mm = gsap.matchMedia();

      // Desktop (> 991px): Smooth scrub & nav tracking
      mm.add("(min-width: 992px)", () => {
        const wrappers = gsap.utils.toArray('.angkatan-panel-wrapper');

        wrappers.forEach((wrapper, i) => {
          const panel = wrapper.querySelector('.angkatan-panel');
          const nextWrapper = wrappers[i + 1];

          // As next wrapper scrolls up over this one, apply subtle scale down & dimming
          if (nextWrapper && panel) {
            const inner = panel.querySelector('.angkatan-panel_inner');
            if (inner) {
              gsap.to(inner, {
                scale: 0.94,
                opacity: 0.45,
                y: -35,
                ease: "none",
                scrollTrigger: {
                  trigger: nextWrapper,
                  start: "top bottom",
                  end: "top top",
                  scrub: true,
                }
              });
            }
          }

          // Active indicator highlight for right-side nav dots
          ScrollTrigger.create({
            trigger: wrapper,
            start: "top 45%",
            end: "bottom 45%",
            onToggle: (self) => {
              if (self.isActive) {
                const dots = document.querySelectorAll('.angkatan-dot');
                dots.forEach(d => d.classList.remove('is-active'));
                const targetId = panel ? panel.id : wrapper.id;
                const activeDot = document.querySelector(`.angkatan-dot[data-target="${targetId}"]`);
                if (activeDot) {
                  activeDot.classList.add('is-active');
                }
              }
            }
          });
        });
      });

      // Quick smooth scroll on dot click
      const dots = document.querySelectorAll('.angkatan-dot');
      dots.forEach(dot => {
        dot.addEventListener('click', function (e) {
          e.preventDefault();
          const targetId = this.getAttribute('data-target');
          const targetEl = document.getElementById(targetId);
          if (targetEl) {
            const wrapperEl = targetEl.closest('.angkatan-panel-wrapper') || targetEl;
            if (typeof lenis !== 'undefined') {
              lenis.scrollTo(wrapperEl);
            } else {
              wrapperEl.scrollIntoView({ behavior: 'smooth' });
            }
          }
        });
      });

      window.addEventListener('load', () => {
        ScrollTrigger.refresh();
      });
    });
  </script>

</x-layouts.app>
