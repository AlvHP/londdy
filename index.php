<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#173c35">
    <title>LAUNDRY | Perawatan Pakaian</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --forest: #173c35;
            --leaf: #dcebe4;
            --ink: #20312d;
            --muted: #61736c;
            --orange: #e58c45;
            --paper: #f7f8f4;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; background: var(--paper); color: var(--ink); font-family: "DM Sans", sans-serif; }
        a { color: inherit; }
        .site-header { position: absolute; z-index: 2; top: 0; left: 0; width: 100%; color: #fff; }
        .nav-wrap { display: flex; align-items: center; justify-content: space-between; width: min(1160px, calc(100% - 48px)); min-height: 82px; margin: 0 auto; border-bottom: 1px solid rgb(255 255 255 / 28%); }
        .brand { color: #fff; font-size: 18px; font-weight: 700; letter-spacing: 2px; text-decoration: none; }
        .nav-links { display: flex; align-items: center; gap: 34px; }
        .nav-links a { color: #fff; font-size: 14px; text-decoration: none; }
        .nav-links a:hover { color: #f5bd88; }
        .nav-login { padding: 11px 17px; border: 1px solid rgb(255 255 255 / 68%); border-radius: 3px; }
        .hero { position: relative; display: flex; align-items: center; min-height: 660px; height: min(780px, 90vh); padding: 120px 24px 85px; overflow: hidden; color: #fff; background: #263d36; }
        .hero::before { position: absolute; inset: 0; background: linear-gradient(90deg, rgb(14 35 30 / 82%) 0%, rgb(14 35 30 / 55%) 48%, rgb(14 35 30 / 10%) 100%), url("https://images.unsplash.com/photo-1545173168-9f1947eebb7f?auto=format&fit=crop&w=2200&q=85") center 48% / cover; content: ""; }
        .hero-content { position: relative; width: min(1160px, 100%); margin: 0 auto; animation: rise-in .7s ease-out both; }
        .eyebrow { display: flex; align-items: center; gap: 12px; margin: 0 0 20px; color: #f2bd8c; font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; }
        .eyebrow::before { width: 32px; height: 2px; background: var(--orange); content: ""; }
        h1 { max-width: 700px; margin: 0; font-family: "Playfair Display", Georgia, serif; font-size: clamp(48px, 6vw, 78px); font-weight: 600; line-height: 1.08; }
        .hero-copy { max-width: 510px; margin: 24px 0 32px; color: rgb(255 255 255 / 82%); font-size: 17px; line-height: 1.75; }
        .hero-actions { display: flex; align-items: center; gap: 24px; }
        .button-primary { display: inline-flex; align-items: center; gap: 12px; padding: 15px 21px; border-radius: 3px; background: var(--orange); color: #fff; font-size: 14px; font-weight: 700; text-decoration: none; transition: background .2s, transform .2s; }
        .button-primary:hover { transform: translateY(-2px); background: #cf7334; }
        .text-link { color: #fff; font-size: 14px; text-decoration: none; }
        .text-link span { margin-left: 6px; color: #f2bd8c; }
        .services { padding: 66px 24px 78px; }
        .services-inner { display: grid; grid-template-columns: minmax(200px, .85fr) 2fr; gap: 70px; width: min(1160px, 100%); margin: 0 auto; }
        .section-label { margin: 0 0 14px; color: #a95b2e; font-size: 12px; font-weight: 700; letter-spacing: 1.7px; text-transform: uppercase; }
        .services h2 { margin: 0; font-family: "Playfair Display", Georgia, serif; font-size: 34px; line-height: 1.2; }
        .service-list { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .service { padding-top: 12px; border-top: 2px solid #c9d8d0; }
        .service-number { color: #a95b2e; font-size: 12px; font-weight: 700; }
        .service h3 { margin: 16px 0 9px; color: var(--forest); font-size: 16px; }
        .service p { margin: 0; color: var(--muted); font-size: 14px; line-height: 1.7; }
        .site-footer { padding: 36px 24px 18px; background: var(--forest); color: rgb(255 255 255 / 78%); font-size: 13px; }
        .footer-inner { width: min(1160px, 100%); margin: 0 auto; }
        .footer-main { display: flex; align-items: flex-start; justify-content: space-between; gap: 32px; padding-bottom: 26px; }
        .footer-brand { color: #fff; font-size: 17px; font-weight: 700; letter-spacing: 2px; text-decoration: none; }
        .footer-description { max-width: 360px; margin: 10px 0 0; color: rgb(255 255 255 / 68%); line-height: 1.6; }
        .footer-links { display: flex; gap: 24px; padding-top: 3px; }
        .footer-links a { color: rgb(255 255 255 / 82%); text-decoration: none; }
        .footer-links a:hover { color: #f5bd88; }
        .footer-bottom { display: flex; justify-content: space-between; gap: 16px; padding-top: 16px; border-top: 1px solid rgb(255 255 255 / 18%); color: rgb(255 255 255 / 58%); font-size: 12px; }

        @keyframes rise-in { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 700px) {
            .nav-wrap { width: calc(100% - 36px); min-height: 72px; }
            .nav-links { gap: 14px; }
            .nav-links a:not(.nav-login) { display: none; }
            .nav-login { padding: 9px 12px; }
            .hero { min-height: 620px; height: 78vh; padding: 115px 22px 62px; }
            .hero::before { background-position: 58% center; background-image: linear-gradient(90deg, rgb(14 35 30 / 78%), rgb(14 35 30 / 42%)), url("https://images.unsplash.com/photo-1545173168-9f1947eebb7f?auto=format&fit=crop&w=1400&q=80"); }
            h1 { font-size: 48px; }
            .hero-copy { max-width: 430px; font-size: 15px; }
            .hero-actions { align-items: flex-start; flex-direction: column; gap: 18px; }
            .services { padding: 48px 22px; }
            .services-inner { grid-template-columns: 1fr; gap: 30px; }
            .services h2 { font-size: 30px; }
            .service-list { grid-template-columns: 1fr; gap: 24px; }
            .service { display: grid; grid-template-columns: 34px 1fr; column-gap: 8px; }
            .service-number { grid-row: span 2; padding-top: 2px; }
            .service h3 { margin: 0 0 6px; }
            .footer-main, .footer-bottom { flex-direction: column; }
            .footer-main { gap: 22px; padding-bottom: 20px; }
            .footer-links { flex-wrap: wrap; gap: 18px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <nav class="nav-wrap" aria-label="Navigasi utama">
            <a class="brand" href="landing.html">LAUNDRY</a>
            <div class="nav-links">
                <a href="#layanan">Layanan</a>
                <a class="nav-login" href="dashboard.php">Login Admin</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <p class="eyebrow">Sistem Informasi Laundry</p>
                <h1>Bersih, rapi, siap dipakai lagi.</h1>
                <p class="hero-copy">Urusan laundry jadi lebih ringan. Pantau layanan dan kelola operasional dengan mudah melalui satu tempat.</p>
                <div class="hero-actions">
                    <a class="button-primary" href="dashboard.php">Masuk ke sistem <span aria-hidden="true">&#8594;</span></a>
                    <a class="text-link" href="#layanan">Lihat layanan <span aria-hidden="true">&#8595;</span></a>
                </div>
            </div>
        </section>

        <section class="services" id="layanan">
            <div class="services-inner">
                <div>
                    <p class="section-label">Lebih teratur setiap hari</p>
                    <h2>Semua kebutuhan laundry, tertangani.</h2>
                </div>
                <div class="service-list">
                    <article class="service">
                        <span class="service-number">01</span>
                        <h3>Data pelanggan</h3>
                        <p>Simpan informasi pelanggan dan temukan kembali saat dibutuhkan.</p>
                    </article>
                    <article class="service">
                        <span class="service-number">02</span>
                        <h3>Status cucian</h3>
                        <p>Pantau pesanan dari proses pencucian hingga siap diambil.</p>
                    </article>
                    <article class="service">
                        <span class="service-number">03</span>
                        <h3>Ringkasan transaksi</h3>
                        <p>Lihat transaksi dan laporan usaha dari dashboard admin.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-main">
                <div>
                    <a class="footer-brand" href="index.php">LAUNDRY</a>
                    <p class="footer-description">Sistem informasi untuk membantu pengelolaan pelanggan, transaksi, dan status cucian.</p>
                </div>
                <nav class="footer-links" aria-label="Navigasi footer">
                    <a href="#layanan">Layanan</a>
                    <a href="dashboard.php">Login Admin</a>
                </nav>
            </div>
            <div class="footer-bottom">
                <span>&copy; 2026 Sistem Informasi Laundry</span>
                <span>Pengelolaan laundry dalam satu tempat.</span>
            </div>
        </div>
    </footer>
</body>
</html>
