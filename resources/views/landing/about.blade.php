<x-layouts.app :title="'Tentang Kami'">

  {{-- Hero Header (Brutalist Editorial Dark Header - No Duplicate Image Banner) --}}
  <div class="section_about-hero" style="min-height: 44svh; height: auto; padding: 7.5rem 0 3.75rem; position: relative; display: flex; align-items: center; justify-content: center; background-color: #1A1A18 !important; overflow: hidden; border-bottom: 1px solid rgba(255,255,255,0.08);">
    {{-- Glow background --}}
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 30%, rgba(233,198,44,0.1) 0%, transparent 70%); pointer-events: none;"></div>

    <div class="padding-global" style="position: relative; z-index: 2; width: 100%;">
      <div style="max-width: 980px; margin: 0 auto; text-align: center;">
        
        {{-- Kicker Badge (Sharp Square) --}}
        <div style="display: inline-flex; align-items: center; gap: 0.6rem; border: 1px solid rgba(233, 198, 44, 0.4); background: rgba(233, 198, 44, 0.08); padding: 0.45rem 1.15rem; border-radius: 0; margin-bottom: 1.5rem;">
          <span style="width: 8px; height: 8px; background-color: var(--background--brand-primary, #E9C62C); display: inline-block;"></span>
          <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
            Profil &amp; Karakter Lembaga
          </span>
        </div>

        {{-- Display Title (Crisp White #FFFFFF) --}}
        <h1 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2.75rem, 6.5vw, 5.5rem); line-height: 0.95; text-transform: uppercase; font-weight: 900; letter-spacing: -0.02em; color: #FFFFFF !important; margin: 0;">
          TENTANG AVERROES
        </h1>

        {{-- Subtitle --}}
        <p style="font-size: clamp(1.05rem, 1.45vw, 1.3rem); color: #B5B5B0 !important; margin-top: 1.35rem; margin-bottom: 0; line-height: 1.7; max-width: 740px; margin-left: auto; margin-right: auto;">
          SMK Averroes Digital Islamic School — Satuan pendidikan kejuruan berbasis pesantren yang mencetak generasi berakhlak Qur'ani dan berkemampuan IT global.
        </p>

        {{-- Fast Facts Ribbon (Square, Sharp Borders) --}}
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 1.75rem; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.95rem; font-weight: 600; color: #BBB;">
          <div style="display: flex; align-items: center; gap: 0.5rem;">
            <span style="color: #E9C62C; font-size: 1.1rem;">✦</span>
            <span>Kota Malang, Jawa Timur</span>
          </div>
          <div style="display: flex; align-items: center; gap: 0.5rem;">
            <span style="color: #E9C62C; font-size: 1.1rem;">✦</span>
            <span>Kurikulum Q-TechLingual</span>
          </div>
          <div style="display: flex; align-items: center; gap: 0.5rem;">
            <span style="color: #E9C62C; font-size: 1.1rem;">✦</span>
            <span>RPL &amp; DKV</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Section Profil & Moto (Light Section) --}}
  <section class="section_about-overview" style="position: relative; z-index: 2; background-color: #F8F8F6; border-bottom: 1px solid rgba(0,0,0,0.08); padding: 5rem 0 6rem;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        
        {{-- Section Subhead Bar --}}
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 3rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(0,0,0,0.1);">
          <div style="display: flex; align-items: center; gap: 0.75rem;">
            <span style="color: #B38F00; font-size: 1.1rem;">✦</span>
            <span style="font-size: 0.92rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: #1A1A18;">
              Identitas &amp; Vokasi Berbasis Keislaman
            </span>
          </div>
          <span style="font-size: 0.92rem; font-style: italic; color: #555;">
            Averroes Digital Islamic School
          </span>
        </div>

        {{-- Main Content Grid: Asymmetric 2-Column --}}
        <div class="about-overview_grid" style="display: grid; grid-template-columns: 1fr 1.35fr; gap: clamp(2rem, 5vw, 4.5rem); align-items: start;">
          
          {{-- Left Column: Brand Statement & Motto Card --}}
          <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
              <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: #B38F00; display: block; margin-bottom: 0.6rem;">
                Landasan Lembaga
              </span>
              <h2 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2rem, 3.2vw, 3rem); line-height: 1.1; text-transform: uppercase; font-weight: 900; color: #1A1A18; margin: 0;">
                Harmoni Adab Santri &amp; Keahlian Digital.
              </h2>
            </div>

            {{-- Stylized Motto Callout Card (100% Ngotak, Square) --}}
            <div style="background: #FFFFFF; border: 1px solid rgba(0,0,0,0.12); border-left: 6px solid #E9C62C; border-radius: 0; padding: 2.25rem 2rem; position: relative; overflow: hidden;">
              <div style="font-size: 0.85rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: #666; margin-bottom: 0.75rem;">
                Moto Resmi Averroes
              </div>
              <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.75rem, 2.5vw, 2.4rem); line-height: 1.05; font-weight: 900; text-transform: uppercase; color: #1A1A18;">
                "Jiwanya Santri,<br/>Skill nya IT"
              </div>
              <div style="position: absolute; right: -15px; bottom: -20px; opacity: 0.08; pointer-events: none; width: 120px; height: 120px;">
                <img src="{{ asset('assets/img/averroes.svg') }}" alt="" style="width: 100%; height: 100%; object-fit: contain;">
              </div>
            </div>
          </div>

          {{-- Right Column: Paragraphs & 3 Bento Feature Cards (100% Ngotak) --}}
          <div style="display: flex; flex-direction: column;">
            
            {{-- Paragraph 1: Editorial Lead --}}
            <p style="font-size: clamp(1.1rem, 1.35vw, 1.25rem); line-height: 1.75; font-weight: 500; color: #1A1A18; margin-top: 0; margin-bottom: 1.5rem;">
              <b>SMK Averroes Digital Islamic School</b> merupakan satuan pendidikan kejuruan berbasis keislaman yang hadir sebagai ikhtiar menghadirkan <b>pendidikan vokasi</b> yang relevan dengan perkembangan teknologi dan kebutuhan dunia kerja.
            </p>

            {{-- Paragraph 2: Core Commitment --}}
            <p style="font-size: clamp(1.02rem, 1.15vw, 1.12rem); line-height: 1.8; color: #4A4A45; margin-bottom: 2.25rem;">
              Dengan mengintegrasikan <b>pembinaan karakter santri</b> dan <b>penguasaan kompetensi digital</b>, SMK Averroes Digital Islamic School berkomitmen melahirkan lulusan yang berakhlak mulia, profesional, dan adaptif terhadap tantangan zaman.
            </p>

            {{-- 3 Feature Cards (All Sharp, Border-radius: 0) --}}
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 2rem;">
              <div style="padding: 1.4rem; background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-radius: 0;">
                <span style="display: block; font-size: 0.85rem; font-weight: 800; color: #B38F00; letter-spacing: 0.08em; margin-bottom: 0.5rem;">01 / VOKASI IT</span>
                <strong style="display: block; font-size: 1.05rem; color: #1A1A18; margin-bottom: 0.35rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Relevan Industri</strong>
                <span style="font-size: 0.95rem; color: #444; line-height: 1.55; display: block;">Kurikulum kejuruan adaptif mengikuti laju teknologi industri modern.</span>
              </div>

              <div style="padding: 1.4rem; background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-radius: 0;">
                <span style="display: block; font-size: 0.85rem; font-weight: 800; color: #B38F00; letter-spacing: 0.08em; margin-bottom: 0.5rem;">02 / PESANTREN</span>
                <strong style="display: block; font-size: 1.05rem; color: #1A1A18; margin-bottom: 0.35rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Adab &amp; Karakter</strong>
                <span style="font-size: 0.95rem; color: #444; line-height: 1.55; display: block;">Pembinaan keislaman, tahfidz, dan akhlak mulia dalam sistem asrama.</span>
              </div>

              <div style="padding: 1.4rem; background: #FFFFFF; border: 1px solid rgba(0,0,0,0.1); border-radius: 0;">
                <span style="display: block; font-size: 0.85rem; font-weight: 800; color: #B38F00; letter-spacing: 0.08em; margin-bottom: 0.5rem;">03 / DAYA SAING</span>
                <strong style="display: block; font-size: 1.05rem; color: #1A1A18; margin-bottom: 0.35rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase;">Kompetensi Global</strong>
                <span style="font-size: 0.95rem; color: #444; line-height: 1.55; display: block;">Lulusan siap kerja, berwirausaha digital, dan siap studi lanjut.</span>
              </div>
            </div>

          </div>
        </div>

        {{-- Full Width (100% Lebar) Interactive Google Maps & Lokasi Wilayah --}}
        <div style="width: 100%; margin-top: clamp(3rem, 4.5vw, 4.5rem); background: #FFFFFF; border: 1px solid rgba(0,0,0,0.12); border-radius: 0; padding: clamp(1.5rem, 2.5vw, 2.25rem); display: flex; flex-direction: column; gap: 1.5rem;">
          
          {{-- Header & Switcher Tabs Bar --}}
          <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.25rem; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 1.25rem;">
            <div>
              <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.35rem;">
                <span style="font-size: 0.85rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: #B38F00;">
                  Peta &amp; Titik Lokasi
                </span>
                <span style="display: inline-flex; align-items: center; gap: 0.35rem; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; color: #1A1A18; background: #E9C62C; padding: 0.25rem 0.6rem; border-radius: 0;">
                  <span style="width: 6px; height: 6px; background: #1A1A18; display: inline-block;"></span>
                  Google Maps Live
                </span>
              </div>
              <h3 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.45rem, 2.3vw, 1.95rem); font-weight: 900; text-transform: uppercase; margin: 0; color: #1A1A18; line-height: 1.1;">
                Wilayah Kampus &amp; Kantor PPDB
              </h3>
            </div>

            {{-- Location Switcher Tabs (100% Ngotak, Square Brutalist) --}}
            <div style="display: inline-flex; gap: 0.35rem; background: #F0F0EE; padding: 0.35rem; border: 1px solid rgba(0,0,0,0.08); border-radius: 0; flex-wrap: wrap;">
              <button type="button" id="tab-btn-kantor" onclick="switchLocation('kantor')" style="cursor: pointer; padding: 0.65rem 1.25rem; font-size: 0.88rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; border: none; border-radius: 0; background: #1A1A18; color: #FFFFFF; transition: all 0.2s;">
                Kantor PPDB (Permata Jingga)
              </button>
              <button type="button" id="tab-btn-kampus" onclick="switchLocation('kampus')" style="cursor: pointer; padding: 0.65rem 1.25rem; font-size: 0.88rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; border: none; border-radius: 0; background: transparent; color: #555550; transition: all 0.2s;">
                Kampus Utama (Cemorokandang)
              </button>
            </div>
          </div>

          {{-- Full Width Google Maps Embed Iframe (100% Ngotak, Square) --}}
          <div style="position: relative; width: 100%; height: clamp(320px, 38vw, 420px); background: #EAEAEA; border: 1px solid rgba(0,0,0,0.15); border-radius: 0; overflow: hidden;">
            <iframe id="gmap-iframe"
              src="https://maps.google.com/maps?q=Averroes+Digital+Islamic+School+ADIS+Malang&t=&z=16&ie=UTF8&iwloc=&output=embed"
              style="width: 100%; height: 100%; border: 0; border-radius: 0; display: block;"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
            </iframe>
          </div>

          {{-- Dual Location Details Grid (Side-by-Side, 100% Ngotak) --}}
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.25rem;">
            
            {{-- Card 1: Kantor Informasi & PPDB --}}
            <div id="card-detail-kantor" style="background: #FBFBFA; border: 1px solid rgba(0,0,0,0.1); border-left: 5px solid #E9C62C; border-radius: 0; padding: 1.35rem 1.6rem; transition: all 0.2s;">
              <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 0.45rem;">
                <strong style="font-size: 1.05rem; color: #1A1A18; text-transform: uppercase; font-family: var(--_font---font-family--heading, sans-serif);">
                  Kantor Informasi &amp; Pendaftaran
                </strong>
                <span style="font-size: 0.85rem; font-weight: 800; color: #B38F00; text-transform: uppercase;">Lowokwaru</span>
              </div>
              <p style="margin: 0 0 0.95rem 0; font-size: 0.98rem; color: #2A2A26; line-height: 1.6;">
                Perumahan Permata Jingga Blok Pinang No. 5, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
              </p>
              <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem; font-size: 0.92rem; color: #444; border-top: 1px dashed rgba(0,0,0,0.12); padding-top: 0.85rem;">
                <span>WA PPDB: <a href="https://wa.me/6288999999744" target="_blank" rel="noopener" style="color: #1A1A18; font-weight: 800; text-decoration: none;">+62 889 9999 9744</a></span>
                <a href="https://www.google.com/maps/place/Averroes+Digital+Islamic+School+(ADIS)/@-7.9290605,112.6125921,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd6299cca363cf3:0xadbb7d92dc3970a3!8m2!3d-7.9290605!4d112.617463!16s%2Fg%2F11sw0g5wx3" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 0.4rem; font-weight: 800; font-size: 0.85rem; color: #1A1A18; background: #E9C62C; padding: 0.5rem 1rem; border-radius: 0; text-decoration: none; text-transform: uppercase;">
                  Buka Google Maps ↗
                </a>
              </div>
            </div>

            {{-- Card 2: Kampus Utama & Asrama --}}
            <div id="card-detail-kampus" style="background: #FBFBFA; border: 1px solid rgba(0,0,0,0.1); border-left: 5px solid #D0D0CE; border-radius: 0; padding: 1.35rem 1.6rem; transition: all 0.2s;">
              <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 0.45rem;">
                <strong style="font-size: 1.05rem; color: #1A1A18; text-transform: uppercase; font-family: var(--_font---font-family--heading, sans-serif);">
                  Kampus &amp; Asrama Santri
                </strong>
                <span style="font-size: 0.85rem; font-weight: 800; color: #555; text-transform: uppercase;">Kedungkandang</span>
              </div>
              <p style="margin: 0 0 0.95rem 0; font-size: 0.98rem; color: #2A2A26; line-height: 1.6;">
                Jl. Slamet Temboro No. 85, Baran Temboro, Kel. Cemorokandang, Kec. Kedungkandang, Kota Malang, Jawa Timur 65138
              </p>
              <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.75rem; font-size: 0.92rem; color: #444; border-top: 1px dashed rgba(0,0,0,0.12); padding-top: 0.85rem;">
                <span>Fasilitas: <b style="color: #1A1A18;">Kampus &amp; Asrama Santri</b></span>
                <a href="https://www.google.com/maps/search/?api=1&query=SMK+Averroes+Digital+Islamic+School+Cemorokandang+Malang" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; gap: 0.4rem; font-weight: 800; font-size: 0.85rem; color: #FFFFFF; background: #1A1A18; padding: 0.5rem 1rem; border-radius: 0; text-decoration: none; text-transform: uppercase;">
                  Buka Google Maps ↗
                </a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>

  {{-- Section Kurikulum Istimewa Q-TechLingual (Dark Theme - 100% Ngotak) --}}
  <section class="section_qtechlingual" style="background-color: #141412; padding: 5.5rem 0 6.5rem; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); position: relative;">
    <div class="padding-global">
      <div style="max-width: 1240px; margin: 0 auto;">
        
        {{-- Section Header --}}
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 3.5rem;">
          <div>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
              <span style="color: var(--background--brand-primary, #E9C62C);">✦</span>
              <span style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C);">
                Kurikulum Khas Averroes
              </span>
            </div>
            <h2 style="margin: 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2.25rem, 4.5vw, 3.75rem); font-weight: 900; text-transform: uppercase; color: #FFFFFF !important; line-height: 1;">
              KURIKULUM Q-TECHLINGUAL
            </h2>
          </div>
          <p style="max-width: 540px; margin: 0; line-height: 1.6; color: #A5A5A0; font-size: 0.98rem;">
            Averroes Digital Islamic School mengadopsi kurikulum istimewa yang menitikberatkan pada tiga pilar utama: <b>Al-Qur'an Diniyah</b>, <b>Teknologi Informasi (IT)</b>, dan <b>Bahasa Global (Arab &amp; Inggris)</b>.
          </p>
        </div>

        {{-- 3 Pillar Cards (100% Ngotak) --}}
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.75rem; margin-bottom: 3.5rem;">
          
          {{-- Pilar 1 --}}
          <div style="background: #1B1B19; border: 1px solid rgba(255,255,255,0.1); border-radius: 0; padding: 2.25rem 2rem; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem;">
                <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C); border: 1px solid rgba(233,198,44,0.35); padding: 0.35rem 0.85rem; border-radius: 0;">
                  Pilar 01
                </span>
                <span style="font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.75rem; font-weight: 900; color: rgba(255,255,255,0.2);">
                  QUR'AN
                </span>
              </div>
              <h3 style="margin: 0 0 1rem 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.55rem; font-weight: 900; color: #FFFFFF; text-transform: uppercase;">
                Al-Qur'an &amp; Diniyah
              </h3>
              <p style="margin: 0; font-size: 1.02rem; line-height: 1.68; color: #C5C5BF;">
                Menjaga keotentikan hafalan Al-Qur'an secara mutqin, adab islami, fiqih ibadah, dan pembinaan akidah yang kokoh dalam kultur pesantren harian.
              </p>
            </div>
            <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.88rem; font-weight: 800; color: var(--background--brand-primary, #E9C62C); letter-spacing: 0.05em; text-transform: uppercase;">
              Tahfidz • Adab • Kitab Kuning
            </div>
          </div>

          {{-- Pilar 2 --}}
          <div style="background: #1B1B19; border: 1px solid rgba(255,255,255,0.1); border-radius: 0; padding: 2.25rem 2rem; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem;">
                <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C); border: 1px solid rgba(233,198,44,0.35); padding: 0.35rem 0.85rem; border-radius: 0;">
                  Pilar 02
                </span>
                <span style="font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.75rem; font-weight: 900; color: rgba(255,255,255,0.2);">
                  TECH
                </span>
              </div>
              <h3 style="margin: 0 0 1rem 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.55rem; font-weight: 900; color: #FFFFFF; text-transform: uppercase;">
                Teknologi Informasi
              </h3>
              <p style="margin: 0; font-size: 1.02rem; line-height: 1.68; color: #C5C5BF;">
                Keahlian praktis vokasi di bidang Rekayasa Perangkat Lunak (RPL) dan Desain Komunikasi Visual (DKV), siap menjawab tantangan industri digital.
              </p>
            </div>
            <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.88rem; font-weight: 800; color: var(--background--brand-primary, #E9C62C); letter-spacing: 0.05em; text-transform: uppercase;">
              Software Dev • UI/UX • Multimedia
            </div>
          </div>

          {{-- Pilar 3 --}}
          <div style="background: #1B1B19; border: 1px solid rgba(255,255,255,0.1); border-radius: 0; padding: 2.25rem 2rem; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1.5rem;">
                <span style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; color: var(--background--brand-primary, #E9C62C); border: 1px solid rgba(233,198,44,0.35); padding: 0.35rem 0.85rem; border-radius: 0;">
                  Pilar 03
                </span>
                <span style="font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.75rem; font-weight: 900; color: rgba(255,255,255,0.2);">
                  LINGUAL
                </span>
              </div>
              <h3 style="margin: 0 0 1rem 0; font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.55rem; font-weight: 900; color: #FFFFFF; text-transform: uppercase;">
                Bahasa Internasional
              </h3>
              <p style="margin: 0; font-size: 1.02rem; line-height: 1.68; color: #C5C5BF;">
                Kemampuan bilingual Bahasa Arab dan Bahasa Inggris sebagai bekal diplomasi, literatur teknologi global, serta keterbukaan wawasan internasional.
              </p>
            </div>
            <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1); font-size: 0.88rem; font-weight: 800; color: var(--background--brand-primary, #E9C62C); letter-spacing: 0.05em; text-transform: uppercase;">
              Bilingual Arab • English Global
            </div>
          </div>

        </div>

        {{-- 6 Bidang Pendidikan (brosur.md: MENGUTAMAKAN PENDIDIKAN) --}}
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); border-radius: 0; padding: 2rem 2.25rem;">
          <div style="font-size: 0.88rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: #AAA; margin-bottom: 1.25rem;">
            Mengutamakan 6 Aspek Pembelajaran:
          </div>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1rem;">
            @php
              $aspek = [
                ['num' => '01', 'title' => 'DINIYAH', 'desc' => 'Akidah & Akhlak'],
                ['num' => '02', 'title' => 'BAHASA', 'desc' => 'Arab & Inggris'],
                ['num' => '03', 'title' => 'TEKNOLOGI', 'desc' => 'Skill IT Industri'],
                ['num' => '04', 'title' => 'AL-QUR\'AN', 'desc' => 'Tahfidz & Tartil'],
                ['num' => '05', 'title' => 'WIRAUSAHA', 'desc' => 'Digital Business'],
                ['num' => '06', 'title' => 'UMUM', 'desc' => 'Akademik Formal'],
              ];
            @endphp
            @foreach($aspek as $item)
              <div style="background: #181816; border: 1px solid rgba(255,255,255,0.08); border-radius: 0; padding: 1.25rem 1.15rem;">
                <span style="font-family: monospace; font-size: 0.85rem; color: var(--background--brand-primary, #E9C62C); font-weight: 800; display: block; margin-bottom: 0.35rem;">{{ $item['num'] }}</span>
                <strong style="color: #FFFFFF; font-size: 1.05rem; font-family: var(--_font---font-family--heading, sans-serif); text-transform: uppercase; display: block; margin-bottom: 0.25rem;">{{ $item['title'] }}</strong>
                <span style="color: #999; font-size: 0.92rem;">{{ $item['desc'] }}</span>
              </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- Section Visi & Misi (Brand Yellow - Signature Animated Lines, 100% Ngotak) --}}
  <div class="section_projets-hero" style="background-color: var(--background--brand-primary, #E9C62C); position: relative; z-index: 2;">
    <div class="padding-global">
      <div class="padding-section-huge">
        <div class="projets-hero_ligne">
          <div id="w-node-da04db69-dc72-7ab9-9b27-5043698dbc3d-58ee438b" style="height:0%" class="ligne_content is-1"></div>
          <div id="w-node-_5b6968e8-c6b8-9a02-66f7-a04797f15c36-58ee438b" style="height:0%" class="ligne_content is-1"></div>
          <div id="w-node-db9b287c-edfc-7af0-56ba-befd5a828e93-58ee438b" style="height:0%" class="ligne_content is-1"></div>
        </div>
        <div class="projets-hero_component">
          <div id="w-node-f72cd514-6393-246e-cc4c-a5685c3e343c-58ee438b" class="projets-hero_content" style="width: 100%;">
            
            <div class="projets-hero_content-title" style="margin-bottom: 2.5rem;">
              <div style="font-size: 0.8rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(26,26,24,0.7); margin-bottom: 0.5rem;">
                Arah &amp; Komitmen
              </div>
              <h2 data-anim="title" style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(2.5rem, 6vw, 5rem); text-transform: uppercase; font-weight: 900; line-height: 1; letter-spacing: -0.02em; color: #1A1A18; margin: 0;">
                VISI &amp; MISI
              </h2>
            </div>

            <div class="projets-hero_content-text max-width-large" style="color: #1A1A18; width: 100%; max-width: 960px;">
              
              {{-- VISI Card (100% Ngotak, Square) --}}
              <div style="background: rgba(26, 26, 24, 0.06); border: 2px solid #1A1A18; border-left: 8px solid #1A1A18; border-radius: 0; padding: clamp(1.5rem, 2.75vw, 2.25rem); margin-bottom: 3rem;">
                <span style="font-size: 0.8rem; font-weight: 900; letter-spacing: 0.15em; text-transform: uppercase; color: #1A1A18; display: block; margin-bottom: 0.75rem;">
                  VISI RESMI
                </span>
                <p data-anim="paragraph" style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.35rem, 2.2vw, 2rem); line-height: 1.25; text-transform: uppercase; font-weight: 900; color: #1A1A18; margin: 0;">
                  "MENJADI SMK BERBASIS PESANTREN YANG MELAHIRKAN GENERASI DENGAN JIWA SANTRI, MEMILIKI KEMAMPUAN IT SERTA BERDAYA SAING GLOBAL"
                </p>
              </div>

              {{-- MISI List (100% Ngotak, Square) --}}
              <div>
                <span style="font-size: 0.82rem; font-weight: 900; letter-spacing: 0.15em; text-transform: uppercase; color: #1A1A18; display: block; margin-bottom: 1.5rem;">
                  5 MISI STRATEGIS
                </span>
                
                @php
                  $misiList = [
                    'Menyelenggarakan pendidikan kejuruan di bidang IT yang berbasis pada kurikulum industri dan perkembangan teknologi terkini.',
                    'Menanamkan nilai nilai keislaman melalui sistem pembinaan pesantren yang terintegrasi dalam kehidupan harian siswa.',
                    'Membentuk karakter lulusan yang berdisiplin, jujur, bertanggung jawab, dan memiliki jiwa kepemimpinan serta kepedulian sosial.',
                    'Mengembangkan kemampuan berbahasa Arab dan Inggris sebagai bekal komunikasi global dan pemahaman literatur keislaman serta teknologi.',
                    'Mempersiapkan lulusan yang siap kerja, siap wirausaha, dan siap melanjutkan studi, dengan kompetensi unggul serta mentalitas santri yang kuat.'
                  ];
                @endphp

                <div style="display: flex; flex-direction: column; gap: 1rem;">
                  @foreach($misiList as $idx => $misi)
                    <div style="display: flex; align-items: flex-start; gap: 1.25rem; background: rgba(255, 255, 255, 0.55); border-radius: 0; padding: 1.25rem 1.65rem;">
                      <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: 1.35rem; font-weight: 900; color: #1A1A18; line-height: 1; min-width: 30px;">
                        0{{ $idx + 1 }}
                      </div>
                      <p data-anim="paragraph" style="margin: 0; font-size: 1.05rem; line-height: 1.6; font-weight: 500; color: #1A1A18;">
                        {{ $misi }}
                      </p>
                    </div>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    @media screen and (max-width: 991px) {
      .about-overview_grid {
        grid-template-columns: 1fr !important;
        gap: 2.5rem !important;
      }
    }
  </style>

  <script>
    function switchLocation(type) {
      var iframe = document.getElementById('gmap-iframe');
      var btnKantor = document.getElementById('tab-btn-kantor');
      var btnKampus = document.getElementById('tab-btn-kampus');
      var cardKantor = document.getElementById('card-detail-kantor');
      var cardKampus = document.getElementById('card-detail-kampus');

      if (!iframe || !btnKantor || !btnKampus) return;

      if (type === 'kantor') {
        iframe.src = "https://maps.google.com/maps?q=Averroes+Digital+Islamic+School+ADIS+Malang&t=&z=16&ie=UTF8&iwloc=&output=embed";
        btnKantor.style.background = "#1A1A18";
        btnKantor.style.color = "#FFFFFF";
        btnKampus.style.background = "transparent";
        btnKampus.style.color = "#666660";
        if (cardKantor) cardKantor.style.borderLeftColor = "#E9C62C";
        if (cardKampus) cardKampus.style.borderLeftColor = "#D0D0CE";
      } else {
        iframe.src = "https://maps.google.com/maps?q=SMK+Averroes+Digital+Islamic+School+Cemorokandang+Malang&t=&z=16&ie=UTF8&iwloc=&output=embed";
        btnKampus.style.background = "#1A1A18";
        btnKampus.style.color = "#FFFFFF";
        btnKantor.style.background = "transparent";
        btnKantor.style.color = "#666660";
        if (cardKampus) cardKampus.style.borderLeftColor = "#E9C62C";
        if (cardKantor) cardKantor.style.borderLeftColor = "#D0D0CE";
      }
    }
  </script>

</x-layouts.app>