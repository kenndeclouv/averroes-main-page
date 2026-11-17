<x-layouts.app title="404 — Halaman Tidak Ditemukan" description="Halaman yang Anda tuju tidak dapat ditemukan di SMK Averroes Digital Islamic School.">
  <div class="section-grain-overlay"></div>

  <section style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 7rem 1.5rem 5rem; position: relative; background-color: var(--background--neutral-primary, #F8F8F6);">
    <div style="max-width: 860px; width: 100%; margin: 0 auto; text-align: center;">

      {{-- Badge --}}
      <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #1A1A18; color: #E9C62C; padding: 0.4rem 1rem; border-radius: 0; font-size: 0.78rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1.75rem;">
        <span>✦</span> ERROR 404 • NOT FOUND
      </div>

      {{-- Giant 404 Headline --}}
      <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(6rem, 16vw, 12rem); font-weight: 900; line-height: 0.9; color: #1A1A18; letter-spacing: -0.04em; margin-bottom: 1rem; text-shadow: 6px 6px 0 #E9C62C;">
        404
      </div>

      <h1 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.75rem, 3.5vw, 2.75rem); font-weight: 900; text-transform: uppercase; color: #1A1A18; margin: 0 0 1rem 0; line-height: 1.15;">
        Halaman Tidak Ditemukan
      </h1>

      <p style="font-size: 1.05rem; line-height: 1.6; color: #666660; max-width: 580px; margin: 0 auto 2.5rem; font-family: var(--_font---font-family--body, sans-serif);">
        Tautan yang Anda tuju mungkin sudah kedaluwarsa, dihapus, atau salah ketik. Jangan khawatir, Anda dapat kembali ke beranda atau mengakses halaman utama kami berikut:
      </p>

      {{-- Action Buttons (100% Ngotak Brutalist) --}}
      <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 0.85rem; margin-bottom: 3.5rem;">
        <a href="/" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.75rem; background: #E9C62C; color: #1A1A18; font-weight: 900; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid #1A1A18; border-radius: 0; box-shadow: 4px 4px 0 #1A1A18; transition: transform 0.15s, box-shadow 0.15s;">
          ← Kembali ke Beranda
        </a>
        <a href="/about" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.5rem; background: #1A1A18; color: #FFFFFF; font-weight: 800; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid #1A1A18; border-radius: 0; transition: background 0.2s;">
          Tentang Sekolah
        </a>
        {{-- <a href="/angkatan" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.5rem; background: #FFFFFF; color: #1A1A18; font-weight: 800; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid #1A1A18; border-radius: 0; transition: background 0.2s;">
          Direktori Angkatan
        </a> --}}
        <a href="/contact" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.5rem; background: transparent; color: #1A1A18; font-weight: 800; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid rgba(26,26,24,0.3); border-radius: 0; transition: border-color 0.2s;">
          Kontak PPDB ↗
        </a>
      </div>

      {{-- Bento Quick Directory Links --}}
      <div style="background: #FFFFFF; border: 2px solid #1A1A18; border-radius: 0; padding: 1.75rem; text-align: left; box-shadow: 6px 6px 0 rgba(26,26,24,0.08);">
        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid rgba(26,26,24,0.12); padding-bottom: 0.75rem; margin-bottom: 1.25rem;">
          <span style="font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #1A1A18;">
            Navigasi Pintas Averroes
          </span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem;">
          <a href="/" style="display: block; padding: 0.85rem 1rem; background: #F8F8F6; border: 1px solid rgba(26,26,24,0.1); border-radius: 0; text-decoration: none; color: #1A1A18;">
            <div style="font-weight: 800; font-size: 0.85rem; margin-bottom: 0.2rem;">01. Beranda</div>
            <div style="font-size: 0.75rem; color: #777;">Halaman utama profil &amp; kegiatan santri</div>
          </a>
          <a href="/about" style="display: block; padding: 0.85rem 1rem; background: #F8F8F6; border: 1px solid rgba(26,26,24,0.1); border-radius: 0; text-decoration: none; color: #1A1A18;">
            <div style="font-weight: 800; font-size: 0.85rem; margin-bottom: 0.2rem;">02. Tentang Kami</div>
            <div style="font-size: 0.75rem; color: #777;">Visi, misi, kurikulum, &amp; lokasi maps</div>
          </a>
          {{-- <a href="/angkatan" style="display: block; padding: 0.85rem 1rem; background: #F8F8F6; border: 1px solid rgba(26,26,24,0.1); border-radius: 0; text-decoration: none; color: #1A1A18;">
            <div style="font-weight: 800; font-size: 0.85rem; margin-bottom: 0.2rem;">03. Angkatan</div>
            <div style="font-size: 0.75rem; color: #777;">Data santri angkatan 1, 2, &amp; PPDB</div>
          </a> --}}
          <a href="/contact" style="display: block; padding: 0.85rem 1rem; background: #F8F8F6; border: 1px solid rgba(26,26,24,0.1); border-radius: 0; text-decoration: none; color: #1A1A18;">
            <div style="font-weight: 800; font-size: 0.85rem; margin-bottom: 0.2rem;">04. Kontak PPDB</div>
            <div style="font-size: 0.75rem; color: #777;">Pendaftaran, WhatsApp, &amp; alamat kantor</div>
          </a>
        </div>
      </div>

    </div>
  </section>
</x-layouts.app>

