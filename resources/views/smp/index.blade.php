<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sistem SMP | EduTemplate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-white text-slate-900">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-emerald-100 p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition text-left">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Beranda
            </a>
            <div class="hidden md:block text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Modul Jenjang SMP</div>
        </div>
    </nav>

    <section class="py-16 bg-emerald-50 border-b border-emerald-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <img src="{{ asset('images/logo/smp.png') }}" alt="Logo SMP" class="w-24 h-24 mx-auto mb-6 drop-shadow-md">
            <h1 class="text-4xl font-extrabold text-slate-900 mb-4 text-center">Eksplorasi Fitur <span class="text-emerald-600 text-center">Sistem SMP</span></h1>
            <p class="text-slate-600 leading-relaxed text-center">Solusi manajemen operasional sekolah menengah dengan kontrol finansial dan administrasi yang lebih terstruktur.</p>
        </div>
    </section>

    <main class="max-w-6xl mx-auto px-4 py-20 space-y-24">

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">Billing & Invoicing SPP</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left">Otomasi tagihan bulanan siswa dan cetak invoice digital. Memudahkan bendahara melacak tunggakan secara sistematis dan real-time tanpa pusing pembukuan manual.</p>
                <a href="/app/smp/keuangan" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Aplikasi Keuangan 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Dashboard Keuangan</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center text-left">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Penjadwalan</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4 text-left">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">Smart Schedule (Guru Mapel)</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left">Atur jam terbang guru bidang studi agar tidak bentrok. Dilengkapi kalender akademik untuk monitoring ujian, libur nasional, dan kegiatan tengah semester secara terpadu.</p>
                <a href="/app/smp/jadwal" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Sistem Penjadwalan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.041m12.236 1.49a9.963 9.963 0 00-1.81 3.483m1.81-3.483a9.969 9.969 0 011.81 3.483M7.357 15.052a9.956 9.956 0 00-1.81 3.483m1.81-3.483a9.965 9.965 0 011.81 3.483"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">Sistem BK & Poin Disiplin</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left">Monitoring perilaku siswa melalui poin pelanggaran dan prestasi. Membantu guru BK melakukan pendekatan secara personal berdasarkan data statistik perilaku siswa.</p>
                <a href="/app/smp/bk" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Portal BK
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Dashboard BK</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview E-Rapor SMP</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">E-Rapor SMP (Per Mapel)</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left">Penilaian komprehensif untuk setiap mata pelajaran. Mendukung penggabungan nilai tugas, UTS, dan UAS secara otomatis menjadi nilai akhir rapor yang siap cetak.</p>
                <a href="/app/smp/rapor" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Aplikasi Rapor
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-left text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4 text-left">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">Ekskul Hub & Pendaftaran</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left text-left">Pusat informasi dan pendaftaran kegiatan ekstrakurikuler. Dilengkapi dengan absensi kehadiran untuk memantau keaktifan siswa di luar jam akademik.</p>
                <a href="/app/smp/ekskul" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Portal Ekskul
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Dashboard Ekskul</div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-1 md:order-2 bg-emerald-50 aspect-video rounded-3xl border-2 border-dashed border-emerald-200 flex items-center justify-center text-emerald-300 italic">Preview Inventaris Lab</div>
            <div class="order-2 md:order-1 text-left">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 11m8 4V21M4 7v10l8 4"></path></svg>
                </div>
                <h2 class="text-3xl font-bold mb-4 text-left">Asset Tracking & Lab</h2>
                <p class="text-slate-600 mb-6 leading-relaxed text-left">Kelola inventaris sekolah mulai dari alat praktikum di laboratorium hingga aset gedung. Mencatat kondisi barang dan jadwal perawatan secara otomatis.</p>
                <a href="/app/smp/asset" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                    Buka Sistem Inventaris
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

    </main>

    <footer class="py-20 bg-emerald-950 text-white text-center">
        <h2 class="text-2xl font-bold mb-6">Kelola Operasional SMP Lebih Profesional</h2>
        <a href="https://wa.me/628123456789" class="px-10 py-4 bg-emerald-600 rounded-full font-bold hover:bg-emerald-700 transition shadow-xl">Beli Template Sistem SMP</a>
    </footer>

</body>
</html>