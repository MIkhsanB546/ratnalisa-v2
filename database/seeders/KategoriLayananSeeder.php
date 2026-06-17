<?php

namespace Database\Seeders;

use App\Models\KategoriLayanan;
use Illuminate\Database\Seeder;

class KategoriLayananSeeder extends Seeder
{
  public function run(): void
  {
    $kategori = [
      ['id_kategori' => 'HEM', 'nama_kategori' => 'Hematologi'],
      ['id_kategori' => 'HST', 'nama_kategori' => 'Hemostasis'],
      ['id_kategori' => 'HML', 'nama_kategori' => 'Hematologi Lain'],
      ['id_kategori' => 'REP', 'nama_kategori' => 'Reproduksi'],
      ['id_kategori' => 'TBC', 'nama_kategori' => 'Tuberkulosis'],
      ['id_kategori' => 'PMS', 'nama_kategori' => 'Penyakit Menular Seksual'],
      ['id_kategori' => 'COV', 'nama_kategori' => 'SARS-CoV-2 COVID 19'],

      ['id_kategori' => 'DIA', 'nama_kategori' => 'Diabetes'],
      ['id_kategori' => 'PLP', 'nama_kategori' => 'Profil Lipid'],
      ['id_kategori' => 'FGJ', 'nama_kategori' => 'Faal Ginjal'],
      ['id_kategori' => 'FHT', 'nama_kategori' => 'Faal Hati'],
      ['id_kategori' => 'JTG', 'nama_kategori' => 'Jantung'],
      ['id_kategori' => 'LGB', 'nama_kategori' => 'Logam Berat'],
      ['id_kategori' => 'LLN', 'nama_kategori' => 'Lain-Lain'],

      ['id_kategori' => 'RMT', 'nama_kategori' => 'Rematik'],
      ['id_kategori' => 'HPT', 'nama_kategori' => 'Hepatitis'],
      ['id_kategori' => 'ELK', 'nama_kategori' => 'Elektrolit'],
      ['id_kategori' => 'IFL', 'nama_kategori' => 'Infeksi Lain'],
      ['id_kategori' => 'MKB', 'nama_kategori' => 'Mikrobiologi'],

      ['id_kategori' => 'URN', 'nama_kategori' => 'Urinalisa'],
      ['id_kategori' => 'FAC', 'nama_kategori' => 'Analisa Faeces'],
      ['id_kategori' => 'NRK', 'nama_kategori' => 'Narkoba'],
      ['id_kategori' => 'TRD', 'nama_kategori' => 'Tiroid'],
      ['id_kategori' => 'TRC', 'nama_kategori' => 'TORCH'],
      ['id_kategori' => 'PCR', 'nama_kategori' => 'Pencernaan'],
      ['id_kategori' => 'PTM', 'nama_kategori' => 'Penanda Tumor'],
      ['id_kategori' => 'PML', 'nama_kategori' => 'Pemeriksaan Lain'],
    ];

    foreach ($kategori as $item) {
      KategoriLayanan::updateOrCreate(
        ['id_kategori' => $item['id_kategori']],
        [
          'nama_kategori' => $item['nama_kategori'],
          'keterangan' => null,
        ]
      );
    }
  }
}
