<x-layouts.app :title="'Beranda'">

  {{-- Hero --}}
  <div class="section_home-hero" style="position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; height: 100svh;">
    {{-- Background Image & Depth Overlay (Isolated from text) --}}
    <div style="position: absolute; inset: 0; z-index: 0; pointer-events: none;">
      <img src="{{ asset('assets/img/averroes-front.webp') }}" alt="Averroes Digital Islamic School" width="1920"
        height="1080" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
      <div style="position: absolute; inset: 0; background: radial-gradient(circle at center, rgba(15,15,14,0.3) 0%, rgba(15,15,14,0.75) 100%), linear-gradient(180deg, rgba(15,15,14,0.4) 0%, transparent 40%, rgba(15,15,14,0.7) 100%);"></div>
    </div>

    {{-- Center Hero Content (Pure #FFFFFF, Crisp & Always Visible) --}}
    <div style="position: relative; z-index: 2; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; pointer-events: none; padding: 2rem 1.5rem; width: 100%;">
      
      {{-- Giant Display Title (PURE WHITE #FFFFFF, Always Visible) --}}
      <h1 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(3.5rem, 14vw, 12rem); line-height: 0.88; text-transform: uppercase; font-weight: 900; letter-spacing: -0.01em; color: #FFFFFF !important; text-shadow: 0 4px 24px rgba(0,0,0,0.85); margin: 0; opacity: 1 !important; visibility: visible !important;">
        AVERROES
      </h1>

      {{-- Moto --}}
      <p class="hero_motto" style="font-size: clamp(1.05rem, 1.8vw, 1.65rem); font-style: italic; color: #FFFFFF !important; opacity: 0.95; margin-top: 1.15rem; margin-bottom: 0; text-shadow: 0 2px 14px rgba(0,0,0,0.85); letter-spacing: 0.04em; font-weight: 600; text-align: center; white-space: nowrap !important;">
        "Jiwanya Santri, Skill nya IT"
      </p>

    </div>

    {{-- Scroll Indicator --}}
    {{-- <div class="hero_scroll_hint" style="position: absolute; bottom: 1.75rem; left: 50%; transform: translateX(-50%); display: flex; flex-direction: column; align-items: center; gap: 0.4rem; opacity: 0.85; z-index: 2; pointer-events: none;">
      <span style="font-size: 0.65rem; font-weight: 700; letter-spacing: 0.25em; text-transform: uppercase; color: #FFFFFF;">Scroll</span>
      <div style="width: 1px; height: 26px; background: linear-gradient(180deg, #FFFFFF 0%, rgba(255,255,255,0) 100%);"></div>
    </div> --}}
  </div>

  {{-- About --}}
  <section class="section_home-about">
    <div class="padding-global">
      <div class="padding-section-xxlarge is-top">
        <div class="home-about_component">
          <div id="w-node-bfb35423-77f3-ccca-fad7-032a2e07973e-310c16e6" class="home-about_content-title">
            <div class="home-about_content-title-container">
              <h2 data-anim="title">Averroes</h2>
            </div>
            <div class="line-h"></div>
          </div>
          <div id="w-node-_3477bf28-a0d8-375a-2330-0a38764a3d63-310c16e6" class="home-about_content-wrapper">
            <div id="w-node-d46a187d-81fb-80aa-de32-f65e8ec2589e-310c16e6" class="content-info_wrapper">
              <p data-anim="paragraph" class="text-align-right">Rujian Khairi<br /><span class="text-style-italic">-
                  Head Master </span></p>
            </div>
            <div data-anim="line-v" class="line-vertical"></div>
            <div id="w-node-_4722443c-223b-b698-0ffa-9bb57834f037-310c16e6" class="home-about_content">
              <p data-anim="paragraph" class="text-size-large max-width-large max-width-full-tablet text-pretty">
                Averroes Digital Islamic School merupakan sebuah lembaga <b>pendidikan pesantren formal setara SMA/SMK</b> yang dirancang untuk melahirkan generasi <b>Qur'ani yang ahli di bidang IT.</b> Kurikulum <b>Q-TechLingual</b> merupakan kurikulum khas yang diadopsi oleh Averroes Digital Islamic School.<br /><br />
                <b>Q-TechLingual</b> menitikberatkan pada tiga aspek pembelajaran utama yakni <b>Al-Qur'an Diniyah</b>, <b>Teknologi Informasi (IT)</b> dan <b>Bahasa (Arab dan Inggris)</b>.<br /><br />
                Dengan <b>Q-TechLingual</b>, diharapkan lulusan Averroes Digital Islamic School bisa menjadi generasi yang <b>Jiwanya Santri, Skillnya IT</b> serta mampu bersaing di dunia global dengan ilmu bahasa yang dimiliki.
              </p>
              <div class="padding-bottom padding-large"></div>
              <a data-wf--button-primary--variant="base" data-w-id="da3e8682-2f4f-c2e0-06ee-0f68fa001bbd"
                href="{{ route('landing.about') }}" class="button-primary w-inline-block">
                <div class="button-primary_content">
                  <div class="button-primary_text-wrapper is-hidden">
                    <div class="button-primary_text">Tentang Kami</div>
                  </div>
                  <div class="button-primary_text-wrapper">
                    <div class="button-primary_text">Tentang Kami</div>
                  </div>
                </div>
                <div class="button-primary_icon w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20" fill="none">
                    <path
                      d="M0.5 8C0.5 9.933 2.067 11.5 4 11.5H18.3789L12.9395 16.9395L15.0605 19.0605L24.1211 10L15.0605 0.939453L12.9395 3.06055L18.3789 8.5H4C3.72386 8.5 3.5 8.27614 3.5 8V2H0.5V8Z"
                      fill="CurrentColor" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Kenapa Kami? (Original Dark Theme & Image Masked Heading) --}}
  @php
    $kenapaKamiImg = averroes_img('kenapa-kami', ['kenapa-kami', 'bg', 'mask', '1'], averroes_img('', ['kenapa-kami', 'averroes-front']));
  @endphp
  <div class="section_projets-hero">
    <div class="padding-global">
      <div class="padding-section-huge">
        <div class="projets-hero_ligne">
          <div id="w-node-da04db69-dc72-7ab9-9b27-5043698dbc3d-58ee438b" style="height:0%" class="ligne_content is-1">
          </div>
          <div id="w-node-_5b6968e8-c6b8-9a02-66f7-a04797f15c36-58ee438b" style="height:0%" class="ligne_content is-1">
          </div>
          <div id="w-node-db9b287c-edfc-7af0-56ba-befd5a828e93-58ee438b" style="height:0%" class="ligne_content is-1">
          </div>
        </div>
        <div class="projets-hero_component">
          <div id="w-node-f72cd514-6393-246e-cc4c-a5685c3e343c-58ee438b" class="projets-hero_content">
            <div class="projets-hero_content-title" style="width: 100%;">
              <h2 class="kenapa-kami-masked-heading" style="--kenapa-kami-bg: url('{{ $kenapaKamiImg }}');">
                Kenapa Kami?
              </h2>
            </div>
            <div class="padding-bottom padding-medium"></div>
            <p data-anim="paragraph" class="projets-hero_content-text">
            <ul>
              <li>Fasilitas yang lengkap dan modern.</li>
              <li>Guru-guru yang profesional dan berpengalaman.</li>
              <li>Kurikulum yang terintegrasi antara ilmu umum dan agama.</li>
              <li>Program unggulan coding dan programming.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Pilihan Jurusan & Digital Skill (Brosur Update) --}}
  <div class="section_services" id="section_services">
    <div class="padding-global">
      <div class="padding-section-medium">
        <div class="home-services_component">
          <div id="w-node-_45976637-a080-7a08-f9c1-1511fdcd4f24-310c16e6" class="home-services_content">
            <div class="home-services_content-title">
              <div class="home-service_content-tilte-container">
                <h2 data-anim="title" class="heading-style-h2-small">PILIHAN JURUSAN</h2>
              </div>
              <div class="padding-bottom padding-regular"></div>
              <p data-anim="paragraph" class="text-color-primary-700 text-size-medium">
                Pendidikan vokasi IT berbasis industri dengan kurikulum komprehensif, mencetak tenaga ahli profesional yang siap terjun ke dunia kerja maupun wirausaha teknologi.
              </p>
              <div class="padding-bottom padding-large"></div>
              <div class="home-service_content-link-container">
                <a href="#RPL" class="home-service_content-link">Rekayasa Perangkat Lunak (RPL) </a>
                <a href="#DKV" class="home-service_content-link">Desain Komunikasi Visual (DKV) </a>
              </div>
              <div class="padding-bottom padding-large"></div>
            </div>
          </div>

          <div id="w-node-_08b13340-14f3-0c75-c5b0-412a68476f6d-310c16e6" class="home-services_content-services">
            
            {{-- RPL Card --}}
            <div id="RPL" class="home-services_services w-inline-block" style="text-decoration:none; cursor:default;">
              <div class="home-services_services_content">
                <div class="home-services_services-content" style="padding-top: 1rem;">
                  <div class="home-services_services-title">
                    <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.5rem;">
                      <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background-color:var(--background--brand-primary, #E9C62C);"></span>
                      <span style="font-size:0.8rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:var(--background--brand-primary, #E9C62C);">Program Keahlian IT</span>
                    </div>
                    <h3 data-anim="title" class="text-color-primary heading-style-h4">Rekayasa Perangkat Lunak (RPL)</h3>
                    <div class="padding-bottom padding-medium"></div>
                    <p data-anim="paragraph" class="text-color-primary-700 text-size-medium">
                      Fokus pada penguasaan software engineering dari dasar hingga implementasi industri, membangun aplikasi web, mobile, logika pemrograman, dan manajemen basis data.
                    </p>
                  </div>
                  <h4 class="text-color-primary-400 heading-style-h5">01</h4>
                </div>

                <div style="margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid rgba(255,255,255,0.12);">
                  <div style="font-size:0.88rem; text-transform:uppercase; letter-spacing:0.12em; color:var(--background--brand-primary, #E9C62C); font-weight:800; margin-bottom:0.85rem;">
                    Digital Skills Yang Dipelajari:
                  </div>
                  <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Web Development (HTML, CSS, JS, PHP, Laravel)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Database Management (MySQL, PostgreSQL)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Mobile App Development (Flutter)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Algoritma & Struktur Data
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Git & Version Control System
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> RESTful API & Backend Architecture
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Cloud Computing & Deployment
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- DKV Card --}}
            <div id="DKV" class="home-services_services w-inline-block" style="text-decoration:none; cursor:default;">
              <div class="home-services_services_content">
                <div class="home-services_services-content" style="padding-top: 1rem;">
                  <div class="home-services_services-title">
                    <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:0.5rem;">
                      <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background-color:var(--background--brand-primary, #E9C62C);"></span>
                      <span style="font-size:0.85rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:var(--background--brand-primary, #E9C62C);">Program Kreatif Digital</span>
                    </div>
                    <h3 data-anim="title" class="text-color-primary heading-style-h4">Desain Komunikasi Visual (DKV)</h3>
                    <div class="padding-bottom padding-medium"></div>
                    <p data-anim="paragraph" class="text-color-primary-700 text-size-medium">
                      Mengasah kepekaan estetika dan kecakapan teknis visual santri dalam menghasilkan karya multimedia, branding profesional, dan media kreatif bernilai komersial tinggi.
                    </p>
                  </div>
                  <h4 class="text-color-primary-400 heading-style-h5">02</h4>
                </div>

                <div style="margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid rgba(255,255,255,0.12);">
                  <div style="font-size:0.88rem; text-transform:uppercase; letter-spacing:0.12em; color:var(--background--brand-primary, #E9C62C); font-weight:800; margin-bottom:0.85rem;">
                    Digital Skills Yang Dipelajari:
                  </div>
                  <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Graphic Design (Photoshop, Illustrator)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> UI/UX Design (Figma, Prototyping)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Video Editing & Motion Graphics (Premiere, After Effects)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> 3D Modeling & Animation (Blender)
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Fotografi & Sinematografi
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Branding & Corporate Identity
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Digital Illustration & Vector Art
                    </div>
                    <div style="display:flex; align-items:center; gap:0.65rem; color:var(--text--primary, #FFFFFF); font-size:1.02rem; line-height:1.5;">
                      <span style="color:var(--background--brand-primary, #E9C62C); font-weight:bold; font-size:1.1rem;">✦</span> Social Media Content Creation
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Section Kegiatan (Photo Slider / Carousel - Light Theme) --}}
  @php
    $kegiatanGallery = averroes_gallery('kegiatan', [
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Kunjungan+Industri', 'name' => 'Kunjungan Industri'],
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Tasmi\'+Al-Qur\'an', 'name' => 'Tasmi\' Al-Qur\'an'],
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Olahraga+Santri', 'name' => 'Olahraga Santri'],
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Rihlah+Edukatif', 'name' => 'Rihlah Santri'],
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Kajian+Kitab+Kuning', 'name' => 'Kajian Kitab'],
      ['url' => 'https://placehold.co/800x520/242422/e9c62c?text=Coding+Bootcamp', 'name' => 'Coding Session'],
    ]);
    $kegiatanCount = count($kegiatanGallery);
  @endphp
  <section class="section_kegiatan" id="section_kegiatan" style="background-color: #F8F8F6; padding: 5rem 0 5.5rem; border-top: 1px solid rgba(0,0,0,0.06); border-bottom: 1px solid rgba(0,0,0,0.06); position: relative; overflow: hidden;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2.5rem;">
          <div>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
              <span style="color: #B38F00; font-size: 1rem;">✦</span>
              <span style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: #B38F00;">
                Aktivitas & Pembiasaan
              </span>
            </div>
            <h2 style="margin: 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2rem, 4vw, 3.25rem); font-weight: 900; text-transform: uppercase; color: #1A1A18 !important; line-height: 1.05;">
              KEGIATAN SANTRI
            </h2>
            <p style="max-width: 580px; margin: 0.75rem 0 0; line-height: 1.6; color: #555550; font-size: 0.95rem;">
              Dokumentasi visual keseimbangan pembinaan spiritual pesantren, eksplorasi teknologi industri, serta kebersamaan santri Averroes.
            </p>
          </div>

          <div class="averroes-slider-controls">
            <span class="averroes-slider-counter" id="kegiatan-counter">01 / {{ str_pad($kegiatanCount, 2, '0', STR_PAD_LEFT) }}</span>
            <button type="button" class="averroes-slider-btn prev" id="kegiatan-prev" aria-label="Foto Sebelumnya">←</button>
            <button type="button" class="averroes-slider-btn next" id="kegiatan-next" aria-label="Foto Berikutnya">→</button>
          </div>
        </div>

        <div class="averroes-slider-container">
          <div class="averroes-slider-track" id="kegiatan-track">
            @foreach($kegiatanGallery as $item)
              <div class="averroes-slide-card" data-index="{{ $loop->iteration }}">
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
  </section>

  {{-- Section Fasilitas (Photo Slider / Carousel - Dark Theme) --}}
  @php
    $fasilitasGallery = averroes_gallery('fasilitas', [
      ['url' => 'https://placehold.co/800x520/1b1b19/e9c62c?text=Lab+Komputer+Modern', 'name' => 'Lab Komputer Modern'],
      ['url' => 'https://placehold.co/800x520/1b1b19/e9c62c?text=Asrama+Santri', 'name' => 'Asrama Santri'],
      ['url' => 'https://placehold.co/800x520/1b1b19/e9c62c?text=Kamar+Mandi+Bersih', 'name' => 'Sanitasi & Kamar Mandi'],
      ['url' => 'https://placehold.co/800x520/1b1b19/e9c62c?text=Gazebo+Santai', 'name' => 'Gazebo Belajar'],
    ]);
    $fasilitasCount = count($fasilitasGallery);
  @endphp
  <section class="section_fasilitas" id="section_fasilitas" style="background-color: var(--text-neutral--secondary-1000, #1a1a18); padding: 5rem 0 5.5rem; border-top: 1px solid rgba(255,255,255,0.08); position: relative; overflow: hidden;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2.5rem;">
          <div>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
              <span style="color: var(--background--brand-primary, #E9C62C);">✦</span>
              <span style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
                Sarana & Prasarana
              </span>
            </div>
            <h2 class="heading-style-h2-small text-color-primary" style="margin: 0; color: #FFFFFF !important;">
              FASILITAS UNGGULAN
            </h2>
            <p class="text-color-primary-700 text-size-medium" style="max-width: 580px; margin: 0.75rem 0 0; line-height: 1.6; color: rgba(255,255,255,0.65);">
              Didukung sarana modern yang nyaman dan berstandar untuk memastikan proses belajar IT serta kehidupan pesantren berjalan optimal.
            </p>
          </div>

          <div class="averroes-slider-controls">
            <span class="averroes-slider-counter is-dark" id="fasilitas-counter">01 / {{ str_pad($fasilitasCount, 2, '0', STR_PAD_LEFT) }}</span>
            <button type="button" class="averroes-slider-btn is-dark prev" id="fasilitas-prev" aria-label="Foto Sebelumnya">←</button>
            <button type="button" class="averroes-slider-btn is-dark next" id="fasilitas-next" aria-label="Foto Berikutnya">→</button>
          </div>
        </div>

        <div class="averroes-slider-container">
          <div class="averroes-slider-track is-dark" id="fasilitas-track">
            @foreach($fasilitasGallery as $item)
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
  </section>

  {{-- Partner & Stats Siswa (Original Theme Wrapper) --}}
  <div data-sticky="sticky-next" class="section-clients">
    <div class="line-horizontal"></div>
    <div class="padding-global">
      <div class="padding-section-medium">
        <div class="clients_component">
          <div class="clients_content">
            <h5 class="text-align-center">Perusahaan Yang Berpartner</h5>
            <div class="padding-bottom padding-xxsmall"></div>
            <p class="text-align-center max-width-medium max-width-full-tablet">Averroes berpartner dengan
              beberapa perusahaan agar siswa bisa mendapat pengalaman dan pelajaran langsung dari dunia
              professional.</p>
          </div>
          <div class="clients_content-wrapper-logo">
            <div class="clients_content-logo-list">
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
            </div>
            <div class="clients_content-logo-list">
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
              <div class="clients_content-logo w-embed">
                <img src="https://placehold.co/120" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- OPEN PPDB --}}
    <div class="line-horizontal" style="background-color: rgba(26,26,24,0.08);"></div>
    <div class="padding-global">
      <div class="padding-section-large" style="padding-top: 4.5rem; padding-bottom: 5.5rem;">
        <div class="container-large" style="max-width: 1040px; margin: 0 auto;">
          
          {{-- Section Header --}}
          <div style="text-align: center; margin-bottom: 2.75rem;">
            <div style="display: inline-flex; align-items: center; gap: 0.6rem; border: 1px solid rgba(26,26,24,0.18); background: #FAF9F5; padding: 0.5rem 1.35rem; margin-bottom: 1.25rem; border-radius: 4px;">
              <span style="width: 8px; height: 8px; background-color: #E9C62C; display: inline-block;"></span>
              <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: #1A1A18;">Penerimaan Santri Baru (PPDB)</span>
            </div>
            <h2 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 900; color: #1A1A18; text-transform: uppercase; letter-spacing: -0.02em; margin: 0 0 0.75rem; line-height: 1.15;">
              Tahun Ajaran 2026/2027
            </h2>
            <p style="font-size: clamp(1.05rem, 1.6vw, 1.2rem); color: #4A4A45; max-width: 650px; margin: 0 auto; line-height: 1.65;">
              Membuka pendaftaran santri baru untuk jenjang SMK berbasis pesantren IT modern di Malang. Raih kesempatan beasiswa dan diskon biaya pendaftaran.
            </p>
          </div>

          {{-- 1. Golden Ticket Voucher (Beasiswa Penuh 100%) --}}
          <div class="ppdb-ticket-voucher" style="position: relative; margin-bottom: 2.25rem; background: linear-gradient(135deg, #DEAE2B 0%, #E9C62C 35%, #F7DC6F 70%, #DEAE2B 100%); padding: 2.5rem 2rem; border-radius: 14px; box-shadow: 0 16px 40px rgba(233, 198, 44, 0.28); color: #FFFFFF; overflow: hidden;">
            {{-- Circular ticket notches on sides --}}
            <div style="position: absolute; left: -18px; top: 50%; transform: translateY(-50%); width: 36px; height: 36px; background-color: #FFFFFF; border-radius: 50%; box-shadow: inset -3px 0 6px rgba(0,0,0,0.12);"></div>
            <div style="position: absolute; right: -18px; top: 50%; transform: translateY(-50%); width: 36px; height: 36px; background-color: #FFFFFF; border-radius: 50%; box-shadow: inset 3px 0 6px rgba(0,0,0,0.12);"></div>

            {{-- Inner Dashed Frame --}}
            <div style="border: 2px dashed rgba(255, 255, 255, 0.9); border-radius: 10px; padding: 2rem 1.5rem; text-align: center;">
              {{-- Stars & Subtitle --}}
              <div style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                <span style="font-size: 1.25rem; letter-spacing: 0.25em;">★★★</span>
                <span style="font-size: clamp(0.95rem, 1.8vw, 1.3rem); font-weight: 900; letter-spacing: 0.2em; text-transform: uppercase;">Raih Kesempatan</span>
                <span style="font-size: 1.25rem; letter-spacing: 0.25em;">★★★</span>
              </div>

              {{-- Main Headline --}}
              <h3 style="font-size: clamp(2.2rem, 5.5vw, 3.8rem); font-weight: 900; letter-spacing: -0.01em; text-transform: uppercase; margin: 0.35rem 0 0.85rem; color: #FFFFFF; text-shadow: 0 3px 12px rgba(0, 0, 0, 0.2); line-height: 1.1;">
                Beasiswa Penuh 100%
              </h3>

              {{-- Available Tracks Badge --}}
              <div style="display: inline-block; font-size: clamp(0.85rem, 1.4vw, 1.05rem); font-weight: 800; letter-spacing: 0.08em; text-transform: uppercase; background: rgba(0, 0, 0, 0.2); padding: 0.55rem 1.5rem; border-radius: 999px;">
                Tersedia Jalur : Reguler • Prestasi Tahfidz • Yatim / Dhuafa
              </div>
            </div>
          </div>

          {{-- 2. Detail Grid: Syarat Pendaftaran + Jadwal & Kontak --}}
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.75rem; align-items: stretch;">
            
            {{-- Kolom Kiri: Syarat Pendaftaran --}}
            <div style="background: #FAF9F5; border: 1px solid rgba(26,26,24,0.14); padding: 2.25rem 2rem; border-radius: 12px; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 1.75rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(26,26,24,0.1);">
                  <div style="width: 40px; height: 40px; background: #E9C62C; display: flex; align-items: center; justify-content: center; border-radius: 8px; color: #1A1A18; font-weight: 900; font-size: 1.25rem;">
                    ✓
                  </div>
                  <h4 style="font-size: 1.45rem; font-weight: 900; color: #1A1A18; text-transform: uppercase; margin: 0; letter-spacing: 0.02em;">
                    Syarat Pendaftaran
                  </h4>
                </div>

                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1.25rem;">
                  @php
                    $syaratList = [
                      "Memiliki bacaan qur'an yang baik (standar tartil)",
                      "Memiliki hafalan minimal 1 juz (Non Beasiswa) & 3 Juz (Jalur Beasiswa)",
                      "Berakhlaqul Karimah",
                      "Memiliki minat di bidang IT (RPL & DKV)",
                      "Surat Keterangan Kurang Mampu (untuk jalur beasiswa Yatim / Dhuafa)"
                    ];
                  @endphp
                  @foreach($syaratList as $syarat)
                    <li style="display: flex; align-items: flex-start; gap: 0.85rem; font-size: 1.05rem; color: #1A1A18; line-height: 1.6; font-weight: 600;">
                      <span style="flex-shrink: 0; width: 24px; height: 24px; background: #E9C62C; color: #1A1A18; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 0.85rem; font-weight: 900; margin-top: 3px;">
                        ✓
                      </span>
                      <span>{{ $syarat }}</span>
                    </li>
                  @endforeach
                </ul>
              </div>

              <div style="margin-top: 2rem; padding: 1.15rem 1.25rem; background: #FFFFFF; border-left: 4px solid #E9C62C; border-radius: 0 8px 8px 0; font-size: 0.95rem; color: #4A4A45; line-height: 1.6;">
                <strong style="color: #1A1A18; font-weight: 800;">Catatan:</strong> Kuota beasiswa terbatas per gelombang. Seleksi berkas dan tes bacaan Al-Qur'an dilakukan secara online maupun tatap muka.
              </div>
            </div>

            {{-- Kolom Kanan: Gelombang 1 (Diskon 50%) + Informasi Kontak --}}
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
              
              {{-- Card Jadwal Gelombang 1 & Diskon 50% --}}
              <div style="display: flex; flex-wrap: wrap; gap: 1rem; align-items: stretch;">
                
                {{-- Badge Potongan 50% --}}
                <div style="flex: 1 1 130px; background: #E11D48; color: #FFFFFF; padding: 1.5rem 1.25rem; border-radius: 12px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; box-shadow: 0 8px 24px rgba(225, 29, 72, 0.22);">
                  <span style="font-size: 0.85rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; line-height: 1.3;">
                    Potongan Biaya Pendaftaran
                  </span>
                  <div style="font-size: clamp(2.6rem, 5vw, 3.4rem); font-weight: 900; line-height: 1; margin: 0.45rem 0;">
                    50%
                  </div>
                  <span style="font-size: 0.85rem; font-weight: 700; opacity: 0.95;">
                    Untuk Gelombang 1
                  </span>
                </div>

                {{-- Teal Schedule Box --}}
                <div style="flex: 2 1 240px; background: #00897B; color: #FFFFFF; padding: 1.5rem 1.75rem; border-radius: 12px; display: flex; flex-direction: column; justify-content: center; box-shadow: 0 8px 24px rgba(0, 137, 123, 0.22);">
                  <div style="font-size: 1rem; font-weight: 800; letter-spacing: 0.06em; text-transform: uppercase; opacity: 0.95; margin-bottom: 0.75rem;">
                    Pendaftaran Gelombang 1
                  </div>
                  <div style="display: flex; align-items: baseline; gap: 0.5rem; flex-wrap: wrap;">
                    <div>
                      <span style="font-size: 2.5rem; font-weight: 900; color: #E9C62C; line-height: 1;">01</span>
                      <span style="font-size: 0.95rem; font-weight: 800; margin-left: 0.35rem;">November 2026</span>
                    </div>
                    <span style="font-size: 1.75rem; font-weight: 900; color: #E9C62C; margin: 0 0.35rem;">—</span>
                    <div>
                      <span style="font-size: 2.5rem; font-weight: 900; color: #E9C62C; line-height: 1;">31</span>
                      <span style="font-size: 0.95rem; font-weight: 800; margin-left: 0.35rem;">Desember 2026</span>
                    </div>
                  </div>
                </div>

              </div>

              {{-- Card Informasi Pendaftaran & Kontak --}}
              <div style="background: #1A1A18; color: #FFFFFF; padding: 2.25rem 2rem; border-radius: 12px; display: flex; flex-direction: column; justify-content: space-between; gap: 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.18);">
                <div>
                  <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.15rem;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: #E9C62C; border-radius: 6px; color: #1A1A18; font-size: 1rem;">
                      📞
                    </span>
                    <span style="font-size: 0.95rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: #E9C62C;">
                      Informasi Pendaftaran
                    </span>
                  </div>

                  <p style="font-size: 1.02rem; color: #E5E5DE; margin-bottom: 1.25rem; line-height: 1.65;">
                    📍 Perumahan Permata Jingga Blok Pinang No.5, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                  </p>

                  <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <a href="https://wa.me/6289505875530" target="_blank" rel="noopener" style="color: #FFFFFF; text-decoration: none; display: inline-flex; align-items: center; gap: 0.6rem; font-size: 1.18rem; font-weight: 800; transition: color 0.2s;" onmouseover="this.style.color='#E9C62C'" onmouseout="this.style.color='#FFFFFF'">
                      <span style="font-size: 1.25rem;">💬</span> +62 895-0587-5530
                    </a>
                    <a href="mailto:islamicschoolaverroes@gmail.com" style="color: #C0C0B8; text-decoration: none; font-size: 0.98rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.6rem; transition: color 0.2s;" onmouseover="this.style.color='#FFFFFF'" onmouseout="this.style.color='#C0C0B8'">
                      <span style="font-size: 1.1rem;">✉️</span> islamicschoolaverroes@gmail.com
                    </a>
                  </div>
                </div>

                {{-- Direct WhatsApp CTA Button --}}
                <a href="https://wa.me/6289505875530?text=Assalamu%27alaikum%20Admin%20Averroes,%20saya%20ingin%20mendaftar%20dan%20mengetahui%20informasi%20lengkap%20PPDB%20Averroes." target="_blank" rel="noopener"
                  style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; background: #E9C62C; color: #1A1A18; text-decoration: none; padding: 1.15rem 1.6rem; border-radius: 8px; font-weight: 800; font-size: 1.05rem; text-transform: uppercase; letter-spacing: 0.05em; transition: transform 0.2s, background-color 0.2s; box-shadow: 0 4px 14px rgba(233,198,44,0.35);"
                  onmouseover="this.style.transform='translateY(-2px)'; this.style.backgroundColor='#F3D23E'"
                  onmouseout="this.style.transform='translateY(0)'; this.style.backgroundColor='#E9C62C'">
                  <span>Daftar Sekarang via WhatsApp</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>

    {{-- Stats Siswa --}}
    <div class="line-horizontal"></div>
    {{-- <div class="padding-global">
      <div class="padding-section-xxlarge">
        <div class="container-large">
          <div class="about-citation_component">
            <div class="home-citation_content-citation is-not-sticky">
              <p data-anim="paragraph" class="heading-style-h4 text-color-secondary">A.D.I.S</p>
              <div class="padding-bottom padding-regular"></div>
              <h2 data-anim="title" class="h2-small text-align-center">Semua siswa kami.</h2>
            </div>
            <div class="padding-bottom padding-huge is-little"></div>
            <div class="statistique_content-container">
              <div class="statistique_content">
                <div class="statistique_content-square is-top-left"></div>
                <div class="statistique_content-square is-top-right"></div>
                <div class="statistique_content-square is-bottom-left"></div>
                <div class="statistique_content-square is-bottom-right"></div>
                <div class="statistique_content-square-border">
                  <p data-anim="title" class="heading-style-h3 text-color-secondary">26+</p>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p data-anim="paragraph">Total Siswa</p>
                </div>
              </div>
              <div id="w-node-_8c5c3ccd-9f72-9239-93b0-f1c7833d3e3f-c8215272" class="statistique_content">
                <div class="statistique_content-square is-top-left"></div>
                <div class="statistique_content-square is-top-right"></div>
                <div class="statistique_content-square is-bottom-left"></div>
                <div class="statistique_content-square is-bottom-right"></div>
                <div class="statistique_content-square-border">
                  <p data-anim="title" class="heading-style-h3 text-color-secondary">14+</p>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p data-anim="paragraph">RPL</p>
                </div>
              </div>
              <div id="w-node-_8c5c3ccd-9f72-9239-93b0-f1c7833d3e49-c8215272" class="statistique_content">
                <div class="statistique_content-square is-top-left"></div>
                <div class="statistique_content-square is-top-right"></div>
                <div class="statistique_content-square is-bottom-left"></div>
                <div class="statistique_content-square is-bottom-right"></div>
                <div class="statistique_content-square-border">
                  <p data-anim="title" class="heading-style-h3 text-color-secondary">12+</p>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p data-anim="paragraph">DKV</p>
                </div>
              </div>
            </div>
            <div class="padding-bottom padding-large"></div>
            <a data-wf--button-primary--variant="base" data-w-id="da3e8682-2f4f-c2e0-06ee-0f68fa001bbd" href="{{ route('landing.angkatan') }}"
              class="button-primary w-inline-block">
              <div class="button-primary_content">
                <div class="button-primary_text-wrapper is-hidden">
                  <div class="button-primary_text">Angkatan</div>
                </div>
                <div class="button-primary_text-wrapper">
                  <div class="button-primary_text">Gallery Angkatan</div>
                </div>
              </div>
              <div class="button-primary_icon w-embed">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20" fill="none">
                  <path
                    d="M0.5 8C0.5 9.933 2.067 11.5 4 11.5H18.3789L12.9395 16.9395L15.0605 19.0605L24.1211 10L15.0605 0.939453L12.9395 3.06055L18.3789 8.5H4C3.72386 8.5 3.5 8.27614 3.5 8V2H0.5V8Z"
                    fill="CurrentColor" />
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> --}}
  </div>

  {{-- Averroes News (Original Webflow Template Component) --}}
  {{-- <div class="section_news" id="section_news">
    <div class="padding-global">
      <div class="padding-section-large">
        <div class="news_component">
          <div class="news_title-wrapper">
            <h2 data-anim="title" class="heading-style-h2-small" style="color: #E9C62C !important;">Averroes News</h2>
            <div class="padding-bottom padding-large"></div>
          </div>
          <div class="news_content">
            <div class="news_content-wrapper w-dyn-list">
              <div class="news_collection-list-wrapper">
                @php
                  $articles = [
                    [
                      'title' => 'Mengapa Averroes adalah pilihan yang tepat?',
                      'date' => 'May 7, 2026',
                      'link' => '#',
                      'image' => averroes_img('news', ['news-1', '1'], 'https://placehold.co/600x400'),
                      'alt' => 'Gambar artikel averroes 1'
                    ],
                    [
                      'title' => 'Pentingnya skill IT untuk masa depan santri',
                      'date' => 'March 26, 2026',
                      'link' => '#',
                      'image' => averroes_img('news', ['news-2', '2'], 'https://placehold.co/600x400'),
                      'alt' => 'Gambar artikel averroes 2'
                    ],
                    [
                      'title' => 'Belajar agama di era serba digital',
                      'date' => 'February 27, 2026',
                      'link' => '#',
                      'image' => averroes_img('news', ['news-3', '3'], 'https://placehold.co/600x400'),
                      'alt' => 'Gambar artikel averroes 3'
                    ]
                  ];
                @endphp
                <div role="list" class="news_collection-list w-dyn-items">
                  @foreach($articles as $article)
                    <div data-w-id="5a843486-a54f-2f76-aded-b4418ad8d4d4" role="listitem"
                      class="news_collection-item w-dyn-item"><a href="{{ $article['link'] }}"
                        class="news_collection-item_wrapper w-inline-block">
                        <div class="news_collection-item_content">
                          <div class="text-color-primary-600 text-style-allcaps post-date">{{ $article['date'] }}</div>
                          <div class="padding-bottom padding-xsmall"></div>
                          <h3 class="news_collection-item_content-title">{{ $article['title'] }}</h3>
                          <div class="padding-bottom padding-medium"></div>
                          <div class="news_collection-item_button">
                            <div class="text-color-primary-700">Baca artikel ini</div>
                            <div class="flex-embed w-embed">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10"
                                fill="none">
                                <path
                                  d="M1 1.21007V3.19369C1 4.30846 1.9037 5.21215 3.01846 5.21215H13.0062M13.0062 5.21215L8.20375 9.21423M13.0062 5.21215L8.20375 1.21007"
                                  stroke="#FBFBFB" />
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="news_collection-item_square-wrapper">
                          <div class="news_collection-item_square-center"></div>
                          <div class="news_collection-item_square is-top-left"></div>
                          <div class="news_collection-item_square is-top-right"></div>
                          <div class="news_collection-item_square is-bottom-left"></div>
                          <div class="news_collection-item_square is-bottom-right"></div>
                        </div>
                        <div class="news_collection-item_shadow"></div>
                        <img src="{{ $article['image'] }}" loading="lazy" alt="{{ $article['alt'] }}"
                          class="news_collection-item_image" />
                      </a></div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="news_bottom-wrapper">
            <div id="w-node-_5a843486-a54f-2f76-aded-b4418ad8d4eb-8ad8d4c6" class="news_bottom-content">
              <a data-wf--button-primary--variant="base" data-w-id="da3e8682-2f4f-c2e0-06ee-0f68fa001bbd" href="/blog"
                class="button-primary w-inline-block">
                <div class="button-primary_content">
                  <div class="button-primary_text-wrapper is-hidden">
                    <div class="button-primary_text">Klik !</div>
                  </div>
                  <div class="button-primary_text-wrapper">
                    <div class="button-primary_text">Lihat Blog</div>
                  </div>
                </div>
                <div class="button-primary_icon w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20" fill="none">
                    <path
                      d="M0.5 8C0.5 9.933 2.067 11.5 4 11.5H18.3789L12.9395 16.9395L15.0605 19.0605L24.1211 10L15.0605 0.939453L12.9395 3.06055L18.3789 8.5H4C3.72386 8.5 3.5 8.27614 3.5 8V2H0.5V8Z"
                      fill="CurrentColor" />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <style>
    .kegiatan_card:hover img, .fasilitas_card:hover img {
      transform: scale(1.04);
    }
    .kegiatan_card:hover {
      border-color: #E9C62C !important;
      transform: translateY(-3px);
    }
    .fasilitas_card:hover {
      border-color: #E9C62C !important;
      transform: translateY(-3px);
    }
  </style>
</x-layouts.app>
