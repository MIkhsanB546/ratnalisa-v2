<?php

namespace Database\Seeders;

use App\Models\DetailPendaftaran;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Pasien;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // KATEGORI & LAYANAN
        // =========================

        $this->call([
            KategoriLayananSeeder::class,
            LayananSeeder::class,
        ]);

        // =========================
        // PETUGAS
        // =========================

        collect([
            [
                'nama' => 'Admin Ratnalisa',
                'username' => 'admin',
                'role' => 'admin',
            ],
            [
                'nama' => 'Customer Service Ratnalisa',
                'username' => 'cs',
                'role' => 'cs',
            ],
            [
                'nama' => 'Manager Ratnalisa',
                'username' => 'manager',
                'role' => 'manager',
            ],
            [
                'nama' => 'Staff Pelayanan Ratnalisa',
                'username' => 'staff',
                'role' => 'staff_pelayanan',
            ],
        ])->each(function (array $petugas): void {

            Petugas::firstOrCreate(
                [
                    'username' => $petugas['username'],
                ],
                [
                    'nama' => $petugas['nama'],
                    'password' => Hash::make('password'),
                    'role' => $petugas['role'],
                ]
            );
        });

        // =========================
        // DOKTER
        // =========================

        collect([
            [
                'nama' => 'dr. Andi Pratama',
                'email' => 'andi@ratnalisa.test',
                'spesialisasi' => 'Patologi Klinik',
                'no_hp' => '081111111111',
            ],
            [
                'nama' => 'dr. Budi Santoso',
                'email' => 'budi@ratnalisa.test',
                'spesialisasi' => 'Patologi Klinik',
                'no_hp' => '082222222222',
            ],
            [
                'nama' => 'dr. Citra Lestari',
                'email' => 'citra@ratnalisa.test',
                'spesialisasi' => 'Patologi Klinik',
                'no_hp' => '083333333333',
            ],
            [
                'nama' => 'dr. Dimas Wijaya',
                'email' => 'dimas@ratnalisa.test',
                'spesialisasi' => 'Patologi Klinik',
                'no_hp' => '084444444444',
            ],
            [
                'nama' => 'dr. Eka Putri',
                'email' => 'eka@ratnalisa.test',
                'spesialisasi' => 'Patologi Klinik',
                'no_hp' => '085555555555',
            ],
        ])->each(function (array $dokter): void {

            Dokter::firstOrCreate(
                [
                    'email' => $dokter['email'],
                ],
                $dokter
            );
        });

        // =========================
        // DATA MASTER
        // =========================

        $layananAktif = Layanan::where(
            'status',
            'aktif'
        )->get();

        $dokters = Dokter::all();

        // =========================
        // PASIEN
        // =========================

        Pasien::factory()
            ->count(20)
            ->create()
            ->each(function (
                Pasien $pasien
            ) use (
                $layananAktif,
                $dokters
            ): void {

                Pendaftaran::factory()
                    ->count(fake()->numberBetween(1, 3))
                    ->create([
                        'id_pasien' => $pasien->id_pasien,
                        'id_dokter' => $dokters->random()->id_dokter,
                    ])
                    ->each(function (
                        Pendaftaran $pendaftaran
                    ) use (
                        $layananAktif
                    ): void {

                        $selectedLayanan = $layananAktif->random(
                            fake()->numberBetween(
                                1,
                                min(
                                    5,
                                    $layananAktif->count()
                                )
                            )
                        );

                        $total = 0;

                        foreach ($selectedLayanan as $layanan) {

                            DetailPendaftaran::create([
                                'id_pendaftaran'
                                => $pendaftaran->id_pendaftaran,

                                'id_layanan'
                                => $layanan->id_layanan,

                                'subtotal'
                                => $layanan->harga,
                            ]);

                            $total += $layanan->harga;
                        }

                        Pembayaran::create([
                            'id_pendaftaran'
                            => $pendaftaran->id_pendaftaran,

                            'tanggal_bayar'
                            => now(),

                            'metode_bayar'
                            => collect([
                                'transfer',
                                'qris',
                                'tunai',
                            ])->random(),

                            'total_bayar'
                            => $total,

                            'status_bayar'
                            => collect([
                                'lunas',
                                'belum_lunas',
                            ])->random(),
                        ]);
                    });
            });
    }
}
