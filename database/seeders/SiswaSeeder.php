<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Nilai;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Data Siswa 1: Hamid
        $siswa1 = Siswa::create([
            'nama' => 'Hamid Abdul Aziz',
            'nisn' => '0012345678',
            'jk'   => 'L',
        ]);

        Nilai::create([
            'siswa_id'  => $siswa1->id,
            'skor'      => 88,
            'deskripsi' => 'Menunjukkan penguasaan sangat baik dalam memahami konsep geometri dan pengukuran secara mendalam.',
            'mapel'     => 'Matematika'
        ]);

        // Data Siswa 2: Salsa
        $siswa2 = Siswa::create([
            'nama' => 'Salsa Bila',
            'nisn' => '0012345679',
            'jk'   => 'P',
        ]);

        Nilai::create([
            'siswa_id'  => $siswa2->id,
            'skor'      => 92,
            'deskripsi' => 'Sangat mahir dalam menyusun teks narasi secara sistematis dan menggunakan diksi yang tepat.',
            'mapel'     => 'Bahasa Indonesia'
        ]);
        
        // Tambahkan data siswa lain jika diperlukan
    }
}