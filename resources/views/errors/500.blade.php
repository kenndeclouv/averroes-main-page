<x-layouts.app title="500 — Terjadi Kesalahan Server" description="Terjadi kendala teknis pada sistem SMK Averroes Digital Islamic School.">
  <div class="section-grain-overlay"></div>

  <section style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 7rem 1.5rem 5rem; position: relative; background-color: var(--background--neutral-primary, #F8F8F6);">
    <div style="max-width: 860px; width: 100%; margin: 0 auto; text-align: center;">

      {{-- Badge --}}
      <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #E9C62C; color: #1A1A18; padding: 0.4rem 1rem; border-radius: 0; font-size: 0.78rem; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 1.75rem;">
        <span>⚠</span> ERROR 500 • SERVER ERROR
      </div>

      {{-- Giant 500 Headline --}}
      <div style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(6rem, 16vw, 12rem); font-weight: 900; line-height: 0.9; color: #1A1A18; letter-spacing: -0.04em; margin-bottom: 1rem; text-shadow: 6px 6px 0 rgba(0,0,0,0.12);">
        500
      </div>

      <h1 style="font-family: var(--_font---font-family--heading, sans-serif); font-size: clamp(1.75rem, 3.5vw, 2.75rem); font-weight: 900; text-transform: uppercase; color: #1A1A18; margin: 0 0 1rem 0; line-height: 1.15;">
        Terjadi Kendala Sistem
      </h1>

      <p style="font-size: 1.05rem; line-height: 1.6; color: #666660; max-width: 580px; margin: 0 auto 2.5rem; font-family: var(--_font---font-family--body, sans-serif);">
        Mohon maaf, server kami sedang mengalami kendala teknis sementara. Tim kami sedang menindaklanjuti. Silakan muat ulang halaman beberapa saat lagi.
      </p>

      {{-- Action Buttons --}}
      <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 0.85rem;">
        <button onclick="window.location.reload();" style="cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.75rem; background: #E9C62C; color: #1A1A18; font-weight: 900; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; border: 2px solid #1A1A18; border-radius: 0; box-shadow: 4px 4px 0 #1A1A18;">
          ↻ Muat Ulang Halaman
        </button>
        <a href="/" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.5rem; background: #1A1A18; color: #FFFFFF; font-weight: 800; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid #1A1A18; border-radius: 0;">
          ← Kembali ke Beranda
        </a>
        <a href="/contact" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.9rem 1.5rem; background: transparent; color: #1A1A18; font-weight: 800; font-size: 0.85rem; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; border: 2px solid rgba(26,26,24,0.3); border-radius: 0;">
          Hubungi Admin PPDB
        </a>
      </div>

    </div>
  </section>
</x-layouts.app>

