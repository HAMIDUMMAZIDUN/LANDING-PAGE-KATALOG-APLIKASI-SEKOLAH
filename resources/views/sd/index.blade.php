<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sistem SD | EduTemplate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-white text-slate-900">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-emerald-100 p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Beranda
            </a>
            <div class="hidden md:block text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Modul Jenjang SD</div>
        </div>
    </nav>

    <section class="py-16 bg-emerald-50 border-b border-emerald-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <img src="{{ asset('images/logo/sd.png') }}" alt="Logo SD" class="w-28 h-28 mx-auto mb-6 drop-shadow-md object-contain bg-white p-2 rounded-2xl">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Eksplorasi Fitur <span class="text-emerald-600">Sistem SD</span></h1>
            <p class="text-slate-600 leading-relaxed max-w-2xl mx-auto">Solusi digital terpadu untuk pendampingan tumbuh kembang siswa dasar dan penguatan komunikasi dengan orang tua.</p>
        </div>
    </section>

    <main class="max-w-6xl mx-auto px-4 py-20 space-y-24 text-left">

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">E-Rapor Kurikulum Merdeka</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Otomasi penilaian yang mengubah angka menjadi narasi deskriptif sesuai capaian pembelajaran Kurikulum Merdeka. Membantu guru menyusun rapor lebih cepat dan akurat.</p>
                <a href="/sd/rapor/login" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Aplikasi Rapor 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Dashboard Rapor</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Parent Portal</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Buku Penghubung Digital</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Jembatan komunikasi harian antara guru dan orang tua. Pantau kegiatan makan, sholat, hingga laporan perilaku anak secara real-time langsung dari smartphone.</p>
                <a href="/app/sd/penghubung" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Portal Orang Tua
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Smart Absensi (QR & WA)</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Sistem kehadiran menggunakan QR Code yang secara otomatis mengirimkan notifikasi WhatsApp kepada orang tua saat anak tiba atau pulang dari sekolah.</p>
                <a href="/app/sd/absensi" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Sistem Absensi
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Absensi Terminal</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Ledger Tabungan</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Manajemen Tabungan Pintar</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Mendorong kebiasaan menabung sejak dini dengan sistem saldo digital yang aman. Riwayat setoran dan penarikan dapat dipantau oleh bendahara dan orang tua.</p>
                <a href="/app/sd/tabungan" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Aplikasi Tabungan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Kantin & Pembayaran SPP</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Sistem pembayaran jajanan kantin non-tunai (cashless) dan manajemen tagihan SPP bulanan yang otomatis menghasilkan status pembayaran real-time.</p>
                <a href="/app/sd/pembayaran" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Sistem Keuangan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview POS Kantin</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Katalog Perpustakaan</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">E-Library: Katalog Cerita</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Perpustakaan digital dengan antarmuka ramah anak. Memudahkan siswa meminjam buku cerita dan literasi secara digital melalui katalog yang menarik.</p>
                <a href="/app/sd/library" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Perpustakaan Digital
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

    </main>

    <footer class="py-20 bg-emerald-950 text-white text-center">
        <h2 class="text-2xl font-bold mb-6">Siap Mengimplementasikan Sistem SD Ini?</h2>
        <a href="https://wa.me/628123456789" class="px-10 py-4 bg-emerald-600 rounded-full font-bold hover:bg-emerald-700 transition shadow-xl">Konsultasi via WhatsApp</a>
    </footer>

</body>
</html>