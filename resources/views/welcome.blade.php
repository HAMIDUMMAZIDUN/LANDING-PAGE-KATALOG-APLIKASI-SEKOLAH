<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTemplate | Solusi Digitalisasi Sekolah Modern</title>
    <meta name="description" content="Template sistem informasi sekolah berbasis Laravel. Modul terlengkap untuk SD, SMP, dan SMA. Siap pakai dan mudah dikustomisasi.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // ── Terapkan dark mode SEBELUM render agar tidak flicker ──
        (function() {
            const saved = localStorage.getItem('edutemplate-theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (saved === 'dark' || (!saved && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    <script>tailwind.config = { darkMode: 'class' }</script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* ── Dark Mode Transitions ── */
        body, nav, section, footer, .product-card, .feat-icon {
            transition: background-color 0.35s ease, border-color 0.35s ease, color 0.35s ease;
        }

        /* ── Dark Mode Overrides ── */
        html.dark body                    { background-color: #0f172a; color: #e2e8f0; }
        html.dark .bg-white               { background-color: #1e293b !important; }
        html.dark .bg-slate-50            { background-color: #0f172a !important; }
        html.dark .text-slate-900         { color: #f1f5f9 !important; }
        html.dark .text-slate-800         { color: #e2e8f0 !important; }
        html.dark .text-slate-700         { color: #cbd5e1 !important; }
        html.dark .text-slate-600         { color: #94a3b8 !important; }
        html.dark .text-slate-500         { color: #64748b !important; }
        html.dark .text-slate-400         { color: #94a3b8 !important; }
        html.dark .border-slate-200       { border-color: #334155 !important; }
        html.dark .border-slate-100       { border-color: #1e293b !important; }
        html.dark .border-y               { border-color: #1e293b !important; }
        html.dark .border-t               { border-color: #1e293b !important; }
        /* Stats bar */
        html.dark section.bg-white.border-y { background-color: #1e293b !important; }
        /* Product cards */
        html.dark .product-card.bg-white  { background-color: #1e293b !important; border-color: #334155 !important; }
        html.dark .product-card.bg-white:hover { border-color: #059669 !important; }
        html.dark .bg-slate-50.rounded-2xl { background-color: #0f172a !important; }
        html.dark .check-icon             { background: linear-gradient(135deg, #064e3b, #065f46) !important; border-color: #059669 !important; }
        html.dark .bg-slate-900.hover\:bg-emerald-600 { background-color: #0f172a !important; border: 1px solid #334155; }
        /* CTA section */
        html.dark section.py-24.bg-white  { background-color: #1e293b !important; }
        html.dark .text-slate-900.tracking-tight { color: #f1f5f9 !important; }
        /* Footer */
        html.dark footer.bg-slate-950     { background-color: #020617 !important; }

        /* ── Floating Toggle Button ── */
        #theme-toggle {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 9999;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
            transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.3s ease, background-color 0.35s ease;
            background: linear-gradient(135deg, #059669, #10b981);
        }
        #theme-toggle:hover {
            transform: scale(1.12) rotate(15deg);
            box-shadow: 0 12px 40px rgba(16,185,129,0.55);
        }
        #theme-toggle:active { transform: scale(0.95); }
        html.dark #theme-toggle {
            background: linear-gradient(135deg, #1e293b, #334155);
            border: 1px solid #475569;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        }
        html.dark #theme-toggle:hover {
            box-shadow: 0 12px 40px rgba(148,163,184,0.25);
        }
        /* Icon visibility */
        #icon-sun  { display: none; }
        #icon-moon { display: block; }
        html.dark #icon-sun  { display: block; }
        html.dark #icon-moon { display: none; }

        /* Tooltip */
        #theme-toggle::before {
            content: attr(data-tooltip);
            position: absolute;
            right: 60px;
            background: rgba(15,23,42,0.9);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 5px 10px;
            border-radius: 8px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        #theme-toggle:hover::before { opacity: 1; }

        * { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* ── Animated Gradient Hero ── */
        .hero-bg {
            background: linear-gradient(135deg, #0f172a 0%, #064e3b 40%, #065f46 70%, #0f172a 100%);
            background-size: 300% 300%;
            animation: gradientShift 10s ease infinite;
        }
        @keyframes gradientShift {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* ── Glassmorphism Navbar ── */
        .glass-nav {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        /* ── Floating orbs ── */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            animation: float 8s ease-in-out infinite;
        }
        .orb-1 { width: 400px; height: 400px; background: rgba(16, 185, 129, 0.15); top: -100px; right: -80px; animation-delay: 0s; }
        .orb-2 { width: 300px; height: 300px; background: rgba(5, 150, 105, 0.12); bottom: 0; left: 5%; animation-delay: -3s; }
        .orb-3 { width: 200px; height: 200px; background: rgba(52, 211, 153, 0.10); top: 40%; left: 40%; animation-delay: -5s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50%       { transform: translateY(-30px) scale(1.05); }
        }

        /* ── Card hover ── */
        .product-card {
            transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.35s ease;
        }
        .product-card:hover { transform: translateY(-10px); }

        /* ── Badge ribbon ── */
        .ribbon {
            position: absolute;
            top: 20px; right: -30px;
            background: linear-gradient(135deg, #059669, #10b981);
            color: white; font-size: 10px; font-weight: 800;
            letter-spacing: .12em; text-transform: uppercase;
            padding: 5px 44px;
            transform: rotate(45deg);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.5);
        }

        /* ── Gradient Text ── */
        .gradient-text {
            background: linear-gradient(135deg, #34d399 0%, #10b981 50%, #6ee7b7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Stat counter ── */
        .stat-num {
            background: linear-gradient(135deg, #059669, #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Feature icon ── */
        .feat-icon {
            background: linear-gradient(135deg, rgba(16,185,129,0.2), rgba(5,150,105,0.1));
            border: 1px solid rgba(16,185,129,0.25);
        }

        /* ── CTA button ── */
        .btn-primary {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            box-shadow: 0 4px 24px rgba(16, 185, 129, 0.45);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            box-shadow: 0 8px 32px rgba(16, 185, 129, 0.65);
            transform: translateY(-2px);
        }

        /* ── Scroll fade-in ── */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Checkmark ── */
        .check-icon {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            border: 1px solid #6ee7b7;
            color: #059669;
        }

        /* ── Nav link underline ── */
        .nav-link {
            position: relative;
            color: rgba(255,255,255,0.75);
            transition: color .25s;
        }
        .nav-link::after {
            content: '';
            position: absolute; left: 0; bottom: -4px;
            width: 0; height: 2px;
            background: #34d399;
            border-radius: 2px;
            transition: width .3s ease;
        }
        .nav-link:hover { color: #fff; }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased overflow-x-hidden">

    {{-- ══════ FLOATING DARK/LIGHT TOGGLE ══════ --}}
    <button id="theme-toggle"
            aria-label="Toggle Dark/Light Mode"
            data-tooltip="Mode Gelap"
            title="Ganti Tema">
        {{-- Moon icon (tampil di mode terang → klik untuk gelap) --}}
        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
        </svg>
        {{-- Sun icon (tampil di mode gelap → klik untuk terang) --}}
        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
        </svg>
    </button>

    {{-- ══════ NAVBAR ══════ --}}
    <nav id="navbar" class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex justify-between items-center h-16">

                <a href="#hero" class="flex items-center gap-3 group">
                    <div class="w-9 h-9 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-900/40 transition-transform group-hover:scale-110">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <span class="text-white text-lg font-bold tracking-tight">Edu<span class="text-emerald-400">Template</span></span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="#hero"   class="nav-link text-sm font-semibold">Beranda</a>
                    <a href="#produk" class="nav-link text-sm font-semibold">Katalog</a>
                    <a href="#fitur"  class="nav-link text-sm font-semibold">Fitur</a>
                    <a href="https://wa.me/628123456789" target="_blank"
                       class="btn-primary px-5 py-2.5 text-white text-sm font-bold rounded-full inline-flex items-center gap-2">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
                        </svg>
                        Beli Template
                    </a>
                </div>

            </div>
        </div>
    </nav>

    {{-- ══════ HERO ══════ --}}
    <section id="hero" class="hero-bg relative min-h-screen flex items-center justify-center pt-16 overflow-hidden">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="absolute inset-0 opacity-[0.03]"
             style="background-image:url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\");"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-8 rounded-full text-xs font-bold uppercase tracking-widest bg-emerald-500/15 border border-emerald-500/30 text-emerald-300">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                Laravel Dashboard Expert &middot; 2026
            </div>

            <h1 class="text-5xl sm:text-6xl md:text-7xl font-black text-white leading-[1.08] tracking-tight mb-6">
                Bangun <span class="gradient-text">Sistem Sekolah</span><br>
                Lebih Cepat &amp; Modern.
            </h1>

            <p class="text-emerald-100/60 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-12">
                Template sistem informasi sekolah berbasis <strong class="text-emerald-300 font-semibold">Laravel 11</strong>
                dengan modul terlengkap. Siap pakai, mudah dikustomisasi, dan dirancang khusus untuk kebutuhan pendidikan di Indonesia.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#produk" class="btn-primary w-full sm:w-auto px-8 py-4 text-white font-bold rounded-2xl text-sm inline-flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    Lihat Katalog Demo
                </a>
                <a href="#fitur" class="w-full sm:w-auto px-8 py-4 rounded-2xl font-bold text-sm text-white border border-white/20 bg-white/5 hover:bg-white/10 backdrop-blur transition inline-flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Dokumentasi
                </a>
            </div>

            <div class="mt-20 flex flex-col items-center gap-2 text-emerald-400/50 text-xs font-medium animate-bounce">
                <span>Scroll ke bawah</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </div>
    </section>

    {{-- ══════ STATS BAR ══════ --}}
    <section class="bg-white border-y border-slate-100 py-12">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-up">
                    <div class="stat-num text-4xl font-black mb-1">100+</div>
                    <div class="text-slate-400 text-xs font-bold uppercase tracking-widest">Modul Aktif</div>
                </div>
                <div class="fade-up" style="transition-delay:.1s">
                    <div class="stat-num text-4xl font-black mb-1">24/7</div>
                    <div class="text-slate-400 text-xs font-bold uppercase tracking-widest">Akses Online</div>
                </div>
                <div class="fade-up" style="transition-delay:.2s">
                    <div class="stat-num text-4xl font-black mb-1">100%</div>
                    <div class="text-slate-400 text-xs font-bold uppercase tracking-widest">Mobile Friendly</div>
                </div>
                <div class="fade-up" style="transition-delay:.3s">
                    <div class="stat-num text-4xl font-black mb-1">A+</div>
                    <div class="text-slate-400 text-xs font-bold uppercase tracking-widest">Clean Code</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════ PRODUCT CATALOG ══════ --}}
    <section id="produk" class="py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16 fade-up">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-widest rounded-full mb-4">
                    Katalog Sistem
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-4">
                    Sistem Terintegrasi <span class="text-emerald-600">SD &middot; SMP &middot; SMA</span>
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto leading-relaxed">
                    Setiap template dirancang khusus dengan fitur yang disesuaikan regulasi pendidikan dan kebutuhan operasional sekolah di Indonesia.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">

                {{-- Card SD --}}
                <div class="product-card fade-up flex flex-col bg-white rounded-3xl p-8 border border-slate-200 hover:border-emerald-200 hover:shadow-[0_20px_60px_-10px_rgba(16,185,129,0.15)]">
                    <div class="flex justify-between items-start mb-7">
                        <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center border border-slate-100 shadow-sm overflow-hidden p-2">
                            <img src="{{ asset('images/logo/sd.png') }}" alt="Logo SD" class="w-full h-full object-contain">
                        </div>
                        <span class="bg-emerald-50 border border-emerald-100 text-emerald-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Siswa &amp; Orang Tua
                        </span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2">Sistem Web SD</h3>
                    <p class="text-slate-400 text-sm mb-7 leading-relaxed">Solusi digital terpadu untuk pendampingan tumbuh kembang siswa dasar.</p>
                    <ul class="space-y-3 mb-8 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">E-Rapor:</strong> Otomasi narasi Kurikulum Merdeka.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">Buku Penghubung:</strong> Laporan harian ke Orang Tua.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">Smart Absensi:</strong> Scan QR &amp; Notif WhatsApp.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">Tabungan Pintar:</strong> Manajemen saldo uang saku.</span>
                        </li>
                    </ul>
                    <a href="/sd" class="block text-center py-3.5 bg-slate-900 hover:bg-emerald-600 text-white rounded-2xl font-bold text-xs uppercase tracking-widest transition-all duration-300 shadow-sm hover:shadow-emerald-200 hover:shadow-lg">
                        Lihat Detail Modul &rarr;
                    </a>
                </div>

                {{-- Card SMP (Featured) --}}
                <div class="product-card fade-up flex flex-col bg-slate-900 rounded-3xl p-8 border border-emerald-600/30 shadow-[0_20px_60px_-10px_rgba(16,185,129,0.25)] relative overflow-hidden" style="transition-delay:.1s">
                    <div class="ribbon">Populer</div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="flex justify-between items-start mb-7 relative z-10">
                        <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center border border-slate-700 shadow-sm overflow-hidden p-2">
                            <img src="{{ asset('images/logo/smp.png') }}" alt="Logo SMP" class="w-full h-full object-contain">
                        </div>
                        <span class="bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Administrasi &amp; Keuangan
                        </span>
                    </div>

                    <h3 class="text-xl font-black text-white mb-2 relative z-10">Sistem Web SMP</h3>
                    <p class="text-slate-400 text-sm mb-7 leading-relaxed relative z-10">Manajemen operasional sekolah dengan kontrol finansial yang ketat dan terintegrasi.</p>

                    <ul class="space-y-3 mb-8 flex-grow relative z-10">
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-white font-semibold">Billing SPP:</strong> Manajemen tagihan &amp; tunggakan.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-white font-semibold">Smart Schedule:</strong> Penjadwalan otomatis guru.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-white font-semibold">Sistem BK:</strong> Monitoring poin &amp; prestasi.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-300">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-white font-semibold">Asset Tracking:</strong> Inventaris lab &amp; alat peraga.</span>
                        </li>
                    </ul>

                    <a href="/smp" class="relative z-10 block text-center py-3.5 btn-primary text-white rounded-2xl font-bold text-xs uppercase tracking-widest">
                        Lihat Detail Modul &rarr;
                    </a>
                </div>

                {{-- Card SMA --}}
                <div class="product-card fade-up flex flex-col bg-white rounded-3xl p-8 border border-slate-200 hover:border-emerald-200 hover:shadow-[0_20px_60px_-10px_rgba(16,185,129,0.15)]" style="transition-delay:.2s">
                    <div class="flex justify-between items-start mb-7">
                        <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center border border-slate-100 shadow-sm overflow-hidden p-2">
                            <img src="{{ asset('images/logo/sma.jpg') }}" alt="Logo SMA" class="w-full h-full object-contain">
                        </div>
                        <span class="bg-violet-50 border border-violet-100 text-violet-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Enterprise &amp; Career
                        </span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-2">Sistem Web SMA</h3>
                    <p class="text-slate-400 text-sm mb-7 leading-relaxed">Platform tingkat lanjut untuk ujian online dan manajemen alumni terintegrasi.</p>
                    <ul class="space-y-3 mb-8 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">CBT Engine:</strong> Ujian online anti-curang.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">College Tracker:</strong> Monitoring masuk PTN/PTS.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">Alumni Hub:</strong> Database lulusan terpadu.</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <span class="check-icon mt-0.5 w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 text-[11px] font-black">&#10003;</span>
                            <span><strong class="text-slate-800 font-semibold">E-Portfolio:</strong> Penyimpanan prestasi siswa.</span>
                        </li>
                    </ul>
                    <a href="/sma" class="block text-center py-3.5 bg-slate-900 hover:bg-emerald-600 text-white rounded-2xl font-bold text-xs uppercase tracking-widest transition-all duration-300 shadow-sm hover:shadow-emerald-200 hover:shadow-lg">
                        Lihat Detail Modul &rarr;
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════ WHY CHOOSE US ══════ --}}
    <section id="fitur" class="py-28 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[2px] bg-gradient-to-r from-transparent via-emerald-500/50 to-transparent"></div>
            <div class="absolute -top-40 right-0 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-500/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

                {{-- Left: Text --}}
                <div class="fade-up">
                    <span class="inline-block px-4 py-1.5 bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-widest rounded-full mb-6">
                        Kenapa EduTemplate?
                    </span>
                    <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-12 leading-tight">
                        Teknologi terbaik<br>untuk <span class="gradient-text">pendidikan</span> Indonesia.
                    </h2>

                    <div class="space-y-8">

                        <div class="flex gap-5 group">
                            <div class="feat-icon flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center text-emerald-400 transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-lg mb-1">Performa Tinggi &amp; Ringan</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Dibangun dengan Laravel 11 terbaru, memastikan akses sistem sangat cepat bahkan saat diakses ribuan siswa sekaligus.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 group">
                            <div class="feat-icon flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center text-emerald-400 transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-lg mb-1">Keamanan Data Terjamin</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Proteksi SQL Injection, CSRF Protection, dan enkripsi data sensitif untuk keamanan dokumen sekolah.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 group">
                            <div class="feat-icon flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center text-emerald-400 transition-transform group-hover:scale-110">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-lg mb-1">Multi-Role Access</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">Hak akses berbeda dirancang khusus untuk Kepala Sekolah, Admin, Guru, Siswa, dan Orang Tua.</p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Right: Image --}}
                <div class="fade-up relative" style="transition-delay:.2s">
                    <div class="absolute -inset-4 bg-emerald-500/10 blur-3xl rounded-full pointer-events-none"></div>
                    <div class="relative rounded-3xl overflow-hidden border border-slate-700 shadow-[0_30px_80px_-10px_rgba(0,0,0,0.5)]">
                        <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80"
                            alt="Dashboard Preview"
                            class="w-full h-full object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5 right-5 flex items-center gap-3 bg-slate-800/80 backdrop-blur rounded-2xl p-4 border border-slate-700">
                            <div class="w-9 h-9 bg-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-semibold">Dashboard Admin</p>
                                <p class="text-slate-400 text-xs">Pantau semua aktivitas sekolah real-time</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════ CTA ══════ --}}
    <section class="py-24 bg-white">
        <div class="max-w-3xl mx-auto px-6 text-center fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-widest rounded-full mb-6">
                Siap memulai?
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-5">
                Transformasi Digital <span class="text-emerald-600">Sekolah Anda</span> Dimulai di Sini.
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed mb-10">
                Hubungi kami sekarang dan dapatkan konsultasi gratis untuk memilih template yang tepat untuk sekolah Anda.
            </p>
            <a href="https://wa.me/628123456789" target="_blank"
               class="btn-primary inline-flex items-center gap-3 px-10 py-4 text-white font-bold rounded-2xl">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
                </svg>
                Konsultasi via WhatsApp
            </a>
        </div>
    </section>

    {{-- ══════ FOOTER ══════ --}}
    <footer class="bg-slate-950 py-14 px-6 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">

                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-white font-bold text-lg">Edu<span class="text-emerald-400">Template</span></div>
                        <div class="text-slate-500 text-xs">Empowering education through clean technology.</div>
                    </div>
                </div>

                <div class="text-slate-500 text-sm text-center">
                    &copy; 2026 <span class="text-slate-300 font-medium">Hamid Abdul Aziz</span>. All rights reserved.
                </div>

                <div class="flex items-center gap-4">
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-emerald-600 border border-slate-700 rounded-xl flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300" aria-label="GitHub">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-emerald-600 border border-slate-700 rounded-xl flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </footer>

    {{-- ══════ JAVASCRIPT ══════ --}}
    <script>
        // ── 1. Dark / Light Mode Toggle ──
        const html       = document.documentElement;
        const toggleBtn  = document.getElementById('theme-toggle');

        function applyTheme(dark) {
            if (dark) {
                html.classList.add('dark');
                toggleBtn.setAttribute('data-tooltip', 'Mode Terang');
            } else {
                html.classList.remove('dark');
                toggleBtn.setAttribute('data-tooltip', 'Mode Gelap');
            }
        }

        // Init from localStorage
        const savedTheme = localStorage.getItem('edutemplate-theme');
        const isDark = savedTheme === 'dark' ||
                       (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches);
        applyTheme(isDark);

        toggleBtn.addEventListener('click', () => {
            const nowDark = html.classList.contains('dark');
            localStorage.setItem('edutemplate-theme', nowDark ? 'light' : 'dark');
            applyTheme(!nowDark);
        });

        // ── 2. Navbar scroll effect ──
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                navbar.classList.remove('glass-nav');
                navbar.classList.add('bg-slate-900/95', 'backdrop-blur-xl', 'border-b', 'border-slate-800');
            } else {
                navbar.classList.add('glass-nav');
                navbar.classList.remove('bg-slate-900/95', 'backdrop-blur-xl', 'border-b', 'border-slate-800');
            }
        });

        // ── 3. Scroll fade-in ──
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('visible');
            });
        }, { threshold: 0.12 });

        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>

</body>
</html>