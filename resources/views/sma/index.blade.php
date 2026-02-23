<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sistem SMA | EduTemplate</title>
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
            <div class="hidden md:block text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Modul Jenjang SMA</div>
        </div>
    </nav>

    <section class="py-16 bg-emerald-50 border-b border-emerald-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <img src="{{ asset('images/logo/sma.jpg') }}" alt="Logo SMA" class="w-28 h-28 mx-auto mb-6 drop-shadow-md rounded-2xl object-contain bg-white p-2">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Eksplorasi Fitur <span class="text-emerald-600">Sistem SMA</span></h1>
            <p class="text-slate-600 leading-relaxed max-w-2xl mx-auto">Platform tingkat lanjut (Enterprise) yang dirancang untuk manajemen ujian berskala besar, peminatan karir, hingga pelacakan alumni.</p>
        </div>
    </section>

    <main class="max-w-6xl mx-auto px-4 py-20 space-y-24">

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.041m12.236 1.49a9.963 9.963 0 00-1.81 3.483m1.81-3.483a9.969 9.969 0 011.81 3.483"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">CBT Engine: Ujian Online</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Mesin ujian online yang tangguh dengan fitur anti-curang (tab locking), pengacakan soal otomatis, dan analisis nilai instan untuk persiapan seleksi masuk PTN.</p>
                <a href="/app/sma/cbt" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Coba Demo CBT 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Ujian Online</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Peminatan</div>
            <div class="order-2 md:order-1">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Peminatan & Kurikulum</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Manajemen pemilihan mata pelajaran pilihan sesuai minat dan bakat dalam skema Kurikulum Merdeka, terintegrasi dengan penjadwalan kelas per jurusan.</p>
                <a href="/app/sma/jurusan" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Sistem Peminatan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">College Tracker (PTN/PTS)</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Monitoring keberhasilan lulusan dalam menembus perguruan tinggi favorit. Data ini otomatis menjadi laporan prestasi sekolah tahunan yang prestisius.</p>
                <a href="/app/sma/tracker" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Tracker Lulusan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Monitoring PTN</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Alumni Network</div>
            <div class="order-2 md:order-1">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 005.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Alumni Hub & Networking</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Database alumni terpadu untuk membangun jejaring kuat antar angkatan. Mendukung pengumpulan data akreditasi sekolah secara otomatis dan efisien.</p>
                <a href="/app/sma/alumni" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Portal Alumni
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">E-Portfolio & Prestasi</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Ruang penyimpanan digital bagi siswa untuk mengumpulkan sertifikat, piagam penghargaan, dan hasil karya guna memperkuat profil saat mendaftar kuliah.</p>
                <a href="/app/sma/portfolio" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Lihat Portofolio
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Profil Siswa</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Jurnal Digital</div>
            <div class="order-2 md:order-1">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Library Advanced & Jurnal</h2>
                <p class="text-slate-600 mb-6 leading-relaxed">Perpustakaan digital yang mendukung penyimpanan jurnal ilmiah, karya tulis siswa, serta e-book khusus materi olimpiade dan persiapan masuk perguruan tinggi.</p>
                <a href="/app/sma/library" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka E-Library SMA
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

    </main>

    <footer class="py-20 bg-emerald-950 text-white text-center">
        <h2 class="text-2xl font-bold mb-6">Tingkatkan Prestasi Sekolah Menengah Anda</h2>
        <a href="https://wa.me/628123456789" class="px-10 py-4 bg-emerald-600 rounded-full font-bold hover:bg-emerald-700 transition shadow-xl">Konsultasi Sistem SMA</a>
    </footer>

</body>
</html>