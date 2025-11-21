<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DosenDetail;
use App\Models\MahasiswaDetail;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\JenisSurat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'nama_lengkap' => 'Administrator',
            'email' => 'admin@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create Dosen Users
        $dosen1 = User::create([
            'nama_lengkap' => 'Yulian Arnsol, S. Kom, M. Kom',
            'email' => 'yulian@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);

        DosenDetail::create([
            'user_id' => $dosen1->user_id,
            'nidn' => '109002222040160',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Pemrograman Web',
        ]);

        $dosen2 = User::create([
            'nama_lengkap' => 'Arief Rahmadi, S.Kom., M.T',
            'email' => 'arief@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);

        DosenDetail::create([
            'user_id' => $dosen2->user_id,
            'nidn' => '2513331005',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'E-Commerce',
        ]);

        $dosen3 = User::create([
            'nama_lengkap' => 'Mohamad Hilman, S.Kom., M.T.I',
            'email' => 'hilman@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);

        DosenDetail::create([
            'user_id' => $dosen3->user_id,
            'nidn' => '2513331092',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Basis Data',
        ]);

        // Additional Dosen
        $dosen4 = User::create([
            'nama_lengkap' => 'Suprinanto, S.Kom., M.Kom.',
            'email' => 'suprinanto@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen4->user_id,
            'nidn' => '2513331093',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'Sistem Basis Data',
        ]);

        $dosen5 = User::create([
            'nama_lengkap' => 'Arief Maman, S.Kom., M.T.',
            'email' => 'ariefmaman@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen5->user_id,
            'nidn' => '2513331094',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Sistem Operasi',
        ]);

        $dosen6 = User::create([
            'nama_lengkap' => 'Wicaksana, S.T., M.Eng.',
            'email' => 'wicaksana@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen6->user_id,
            'nidn' => '2513331095',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Internet of Things',
        ]);

        $dosen7 = User::create([
            'nama_lengkap' => 'Ningning Krisdayanti, S.Kom., M.Sc.',
            'email' => 'ningning@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen7->user_id,
            'nidn' => '2513331096',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'Kecerdasan Artificial',
        ]);

        $dosen8 = User::create([
            'nama_lengkap' => 'Fathin Damyati, S.Kom., M.Kom.',
            'email' => 'fathin@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen8->user_id,
            'nidn' => '2513331097',
            'jabatan_fungsional' => 'Lektor Kepala',
            'bidang_keahlian' => 'Pemrograman Web',
        ]);

        $dosen9 = User::create([
            'nama_lengkap' => 'Febriyanto Darnis, S.T., M.T.',
            'email' => 'febriyanto@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen9->user_id,
            'nidn' => '2513331098',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'Algoritma',
        ]);

        $dosen10 = User::create([
            'nama_lengkap' => 'Hill Man, S.Kom., M.T.I.',
            'email' => 'hillman@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen10->user_id,
            'nidn' => '2513331099',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Jaringan Komputer',
        ]);

        $dosen11 = User::create([
            'nama_lengkap' => 'Yulian I Am Sorry, S.Kom., M.Kom.',
            'email' => 'yuliansorry@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen11->user_id,
            'nidn' => '2513331100',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'E-Commerce',
        ]);

        $dosen12 = User::create([
            'nama_lengkap' => 'Miftahun Solihin, S.Kom., M.T.',
            'email' => 'miftahun@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen12->user_id,
            'nidn' => '2513331101',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        $dosen13 = User::create([
            'nama_lengkap' => 'Mas Judin, S.T., M.Eng.',
            'email' => 'masjudin@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen13->user_id,
            'nidn' => '2513331102',
            'jabatan_fungsional' => 'Asisten Ahli',
            'bidang_keahlian' => 'Sistem Informasi',
        ]);

        $dosen14 = User::create([
            'nama_lengkap' => 'Alwan NPD, S.Kom., M.Kom.',
            'email' => 'alwan@untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
        DosenDetail::create([
            'user_id' => $dosen14->user_id,
            'nidn' => '2513331103',
            'jabatan_fungsional' => 'Lektor',
            'bidang_keahlian' => 'Data Mining',
        ]);

        // Create Fakultas
        $fakultasTeknik = Fakultas::create([
            'fakultas' => 'Fakultas Teknik',
        ]);

        $fakultasEkonomi = Fakultas::create([
            'fakultas' => 'Fakultas Ekonomi',
        ]);

        // Create Prodi
        $prodiInformatika = Prodi::create([
            'code' => 'IF001',
            'name' => 'Informatika',
            'fakultas_id' => $fakultasTeknik->id,
        ]);

        $prodiSistemInformasi = Prodi::create([
            'code' => 'SI001',
            'name' => 'Sistem Informasi',
            'fakultas_id' => $fakultasTeknik->id,
        ]);

        $prodiManajemen = Prodi::create([
            'code' => 'MN001',
            'name' => 'Manajemen',
            'fakultas_id' => $fakultasEkonomi->id,
        ]);

        // Create Mahasiswa Users
        $mahasiswa1 = User::create([
            'nama_lengkap' => 'JAYNUDIN MALIK',
            'email' => 'jaynudin02@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'mahasiswa',
        ]);

        MahasiswaDetail::create([
            'user_id' => $mahasiswa1->user_id,
            'nim' => '33372400110',
            'dosen_pa_id' => $dosen3->user_id,
            'angkatan' => '2024',
            'program_studi' => 'Informatika',
            'status_mahasiswa' => 'Aktif',
        ]);

        $mahasiswa2 = User::create([
            'nama_lengkap' => 'Budi Santoso',
            'email' => 'budi@student.untirta.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'mahasiswa',
        ]);

        MahasiswaDetail::create([
            'user_id' => $mahasiswa2->user_id,
            'nim' => '3337240001',
            'dosen_pa_id' => $dosen1->user_id,
            'angkatan' => '2024',
            'program_studi' => 'Informatika',
            'status_mahasiswa' => 'Aktif',
        ]);

        // Mahasiswa Batch 2024
        $mahasiswaData = [
            ['nama' => 'PALUPI EKA WARDANI', 'email' => 'palupi@gmail.com', 'nim' => '3337240002'],
            ['nama' => 'CHANDA KARIMA PASIFIKA', 'email' => 'chanda@gmail.com', 'nim' => '3337240003'],
            ['nama' => 'KELVIN FEBRIANTO', 'email' => 'kelvin@gmail.com', 'nim' => '3337240004'],
            ['nama' => 'AFNAN YAZID PRADANA', 'email' => 'afnan@gmail.com', 'nim' => '3337240005'],
            ['nama' => 'KURNIAWAN SAPUTRA', 'email' => 'kurniawan@gmail.com', 'nim' => '3337240006'],
            ['nama' => 'MUHAMMAD AKBAR MUZAKI', 'email' => 'akbar@gmail.com', 'nim' => '3337240007'],
            ['nama' => 'NICO GUNAWAN PURBA', 'email' => 'nico@gmail.com', 'nim' => '3337240008'],
            ['nama' => 'MOHAMAD FERDIANSYAH', 'email' => 'ferdiansyah@gmail.com', 'nim' => '3337240009'],
            ['nama' => 'AQIL MAHTUF MAULANA YUSUP', 'email' => 'aqil@gmail.com', 'nim' => '3337240010'],
            ['nama' => 'ANGGUN RAMADAYANTI', 'email' => 'anggun@gmail.com', 'nim' => '3337240011'],
            ['nama' => 'RINDRA SATRIATAMA PUTRA', 'email' => 'rindra@gmail.com', 'nim' => '3337240012'],
            ['nama' => 'DAFFA AHMAD FARHAN', 'email' => 'daffa@gmail.com', 'nim' => '3337240013'],
            ['nama' => 'FITO ADI NUGRAHA', 'email' => 'fito@gmail.com', 'nim' => '3337240014'],
            ['nama' => 'VIORENZA AGUSTINA RAHAYU', 'email' => 'viorenza@gmail.com', 'nim' => '3337240015'],
            ['nama' => 'NADHIF ALFASYA', 'email' => 'nadhif@gmail.com', 'nim' => '3337240016'],
            ['nama' => 'RISALAH KEISHATORA', 'email' => 'risalah@gmail.com', 'nim' => '3337240017'],
            ['nama' => 'ABDURROHMAN MUJADID', 'email' => 'abdurrohman@gmail.com', 'nim' => '3337240018'],
            ['nama' => 'INDAH PURNAMAWATI', 'email' => 'indah@gmail.com', 'nim' => '3337240019'],
            ['nama' => 'FADHILA NUR RIZQIA', 'email' => 'fadhila@gmail.com', 'nim' => '3337240020'],
            ['nama' => 'MUHAMMAD HAZIQ FIRDAUS', 'email' => 'haziq@gmail.com', 'nim' => '3337240021'],
            ['nama' => 'MUHAMMAD RIZKY FAJAR', 'email' => 'rizky@gmail.com', 'nim' => '3337240022'],
            ['nama' => 'AMELIA PUTRI AQIILAH', 'email' => 'amelia@gmail.com', 'nim' => '3337240023'],
            ['nama' => 'PANJI SAKA PUTRA PRATAMA', 'email' => 'panji@gmail.com', 'nim' => '3337240024'],
            ['nama' => 'MUHAMMAD HAFIRST FIRDAUS', 'email' => 'hafirst@gmail.com', 'nim' => '3337240025'],
            ['nama' => 'LAILATUN NAJMI', 'email' => 'lailatun@gmail.com', 'nim' => '3337240026'],
            ['nama' => 'FAHMI INAYATUR RAHMAN ATMAJA', 'email' => 'fahmi@gmail.com', 'nim' => '3337240027'],
            ['nama' => 'ANANTA GALIH MAHARDIKA', 'email' => 'ananta@gmail.com', 'nim' => '3337240028'],
            ['nama' => 'IHSAN ARIF INDRA SYAHPUTRA', 'email' => 'ihsan@gmail.com', 'nim' => '3337240029'],
            ['nama' => 'NUR FEBRIYANTI FAHRUDIN', 'email' => 'febriyanti@gmail.com', 'nim' => '3337240030'],
            ['nama' => 'FAJAR NUGROHO', 'email' => 'fajar@gmail.com', 'nim' => '3337240031'],
            ['nama' => 'MARCO EKA PUTRA NAIBAHO', 'email' => 'marco@gmail.com', 'nim' => '3337240032'],
            ['nama' => 'NAUFAL DIMAS FAJRI', 'email' => 'naufal@gmail.com', 'nim' => '3337240033'],
            ['nama' => 'HILAL RAMDANI', 'email' => 'hilal@gmail.com', 'nim' => '3337240034'],
            ['nama' => 'GENTA GEMINTANG', 'email' => 'genta@gmail.com', 'nim' => '3337240035'],
            ['nama' => 'RIZAN ABKI CHAERULLAH', 'email' => 'rizan@gmail.com', 'nim' => '3337240036'],
            ['nama' => 'DIAN KAMILAH', 'email' => 'dian@gmail.com', 'nim' => '3337240037'],
            ['nama' => 'MEYTHA REYANI SIRAYAN', 'email' => 'meytha@gmail.com', 'nim' => '3337240038'],
            ['nama' => 'MUHAMMAD RIDHO AL GHIFAHRI', 'email' => 'ridho@gmail.com', 'nim' => '3337240039'],
            ['nama' => 'ABDUR RACHMAN', 'email' => 'rachman@gmail.com', 'nim' => '3337240040'],
            ['nama' => 'POPPY NOVITA', 'email' => 'poppy@gmail.com', 'nim' => '3337240041'],
        ];

        foreach ($mahasiswaData as $index => $data) {
            $mhs = User::create([
                'nama_lengkap' => $data['nama'],
                'email' => $data['email'],
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ]);

            MahasiswaDetail::create([
                'user_id' => $mhs->user_id,
                'nim' => $data['nim'],
                'dosen_pa_id' => $dosen1->user_id, // Assign to first dosen
                'angkatan' => '2024',
                'program_studi' => 'Informatika',
                'status_mahasiswa' => 'Aktif',
            ]);
        }

        // Mata Kuliah akan ditambahkan oleh admin melalui dashboard
        
        // Create Jenis Surat
        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Aktif Kuliah',
            'persyaratan' => 'KTM aktif, Bukti pembayaran UKT semester berjalan',
            'estimasi_hari' => 3,
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Pengantar Magang',
            'persyaratan' => 'Transkrip nilai minimal 100 SKS, Surat permohonan dari perusahaan',
            'estimasi_hari' => 5,
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Lulus',
            'persyaratan' => 'Ijazah, Transkrip nilai akhir, Surat bebas perpustakaan',
            'estimasi_hari' => 7,
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Izin Penelitian',
            'persyaratan' => 'Proposal penelitian yang telah disetujui pembimbing, KTM aktif',
            'estimasi_hari' => 4,
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Rekomendasi Beasiswa',
            'persyaratan' => 'IPK minimal 3.00, Transkrip nilai, Surat permohonan beasiswa',
            'estimasi_hari' => 5,
        ]);

        JenisSurat::create([
            'nama_surat' => 'Surat Keterangan Cuti Akademik',
            'persyaratan' => 'Surat permohonan cuti, Surat persetujuan orang tua, Bukti alasan cuti',
            'estimasi_hari' => 3,
        ]);

        $this->command->info('Database seeded successfully!');
    }
}
