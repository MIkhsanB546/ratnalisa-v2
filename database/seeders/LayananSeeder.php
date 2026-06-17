<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $layanan = [

            // HEMATOLOGI
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Hematologi Rutin'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Hematologi Rutin + Diff Count'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Hematologi Lengkap'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Golongan Darah + Rhesus'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Hemoglobin'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Laju Endap Darah (LED)'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Retikulosit'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Besi (Serum Iron)'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'TIBC'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Feritin'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Transferin'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Morfologi Darah Tepi'],
            ['id_kategori' => 'HEM', 'nama_layanan' => 'Eosinofil Absolut'],

            // HEMOSTASIS
            ['id_kategori' => 'HST', 'nama_layanan' => 'Waktu Perdarahan'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'Waktu Pembekuan'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'Waktu Protombin (PT-INR)'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'APTT'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'D-Dimer'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'Fibrinogen'],
            ['id_kategori' => 'HST', 'nama_layanan' => 'Agregasi Trombosit'],

            // HEMATOLOGI LAIN
            ['id_kategori' => 'HML', 'nama_layanan' => 'Analisa Hb (HPLC)'],
            ['id_kategori' => 'HML', 'nama_layanan' => 'Badan Inklusi Hb'],
            ['id_kategori' => 'HML', 'nama_layanan' => 'CD4'],
            ['id_kategori' => 'HML', 'nama_layanan' => 'CD8'],

            // REPRODUKSI
            ['id_kategori' => 'REP', 'nama_layanan' => 'AMH'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'FSH'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Prolaktin'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Progesteron'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Estradiol'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Beta HCG'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Testosteron'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'SHBG'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Free Testosteron'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'DHEA-S'],
            ['id_kategori' => 'REP', 'nama_layanan' => 'Kortisol'],

            // TUBERKULOSIS
            ['id_kategori' => 'TBC', 'nama_layanan' => 'IGRA'],
            ['id_kategori' => 'TBC', 'nama_layanan' => 'Adenosine Deaminase (ADA)'],
            ['id_kategori' => 'TBC', 'nama_layanan' => 'BTA Mikroskopik'],

            // PMS
            ['id_kategori' => 'PMS', 'nama_layanan' => 'VDRL/RPR'],
            ['id_kategori' => 'PMS', 'nama_layanan' => 'TPHA'],
            ['id_kategori' => 'PMS', 'nama_layanan' => 'Anti-Chlamydia IgG'],
            ['id_kategori' => 'PMS', 'nama_layanan' => 'Anti-Chlamydia IgM'],

            // COVID
            ['id_kategori' => 'COV', 'nama_layanan' => 'SARS-CoV-2 Antigen'],
            ['id_kategori' => 'COV', 'nama_layanan' => 'SARS-CoV-2 RNA'],

            // DIABETES
            ['id_kategori' => 'DIA', 'nama_layanan' => 'Glukosa Puasa'],
            ['id_kategori' => 'DIA', 'nama_layanan' => 'Glukosa 2 Jam PP'],
            ['id_kategori' => 'DIA', 'nama_layanan' => 'Glukosa Sewaktu'],
            ['id_kategori' => 'DIA', 'nama_layanan' => 'Glukosa Toleransi Test'],
            ['id_kategori' => 'DIA', 'nama_layanan' => 'HbA1C'],
            ['id_kategori' => 'DIA', 'nama_layanan' => 'Insulin'],

            // PROFIL LIPID
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Cholesterol Total'],
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Cholesterol HDL'],
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Cholesterol LDL'],
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Trigliserida'],
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Apo B'],
            ['id_kategori' => 'PLP', 'nama_layanan' => 'Lp(a)'],

            // FAAL GINJAL
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Ureum'],
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Kreatinin'],
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Kreatinin Clearance'],
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Asam Urat'],
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Protein 24 Jam (Urine)'],
            ['id_kategori' => 'FGJ', 'nama_layanan' => 'Mikro Albumin (Urine)'],

            // FAAL HATI
            ['id_kategori' => 'FHT', 'nama_layanan' => 'SGOT'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'SGPT'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Gamma GT'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Alkali Phospatase'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Bilirubin Total'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Bilirubin Direct'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Protein Total'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Albumin'],
            ['id_kategori' => 'FHT', 'nama_layanan' => 'Cholinesterase'],

            // JANTUNG
            ['id_kategori' => 'JTG', 'nama_layanan' => 'CK'],
            ['id_kategori' => 'JTG', 'nama_layanan' => 'CKMB'],
            ['id_kategori' => 'JTG', 'nama_layanan' => 'Troponin T'],
            ['id_kategori' => 'JTG', 'nama_layanan' => 'Troponin I'],
            ['id_kategori' => 'JTG', 'nama_layanan' => 'LDH'],
            ['id_kategori' => 'JTG', 'nama_layanan' => 'hs-CRP'],

            // LOGAM BERAT
            ['id_kategori' => 'LGB', 'nama_layanan' => 'Vitamin D25-OH Total'],

            // LAIN-LAIN
            ['id_kategori' => 'LLN', 'nama_layanan' => 'Analisa Sperma'],
            ['id_kategori' => 'LLN', 'nama_layanan' => 'Pap Smear'],
            ['id_kategori' => 'LLN', 'nama_layanan' => 'Pap Smear Thin Prep'],

            // REMATIK
            ['id_kategori' => 'RMT', 'nama_layanan' => 'ASTO'],
            ['id_kategori' => 'RMT', 'nama_layanan' => 'RF'],
            ['id_kategori' => 'RMT', 'nama_layanan' => 'CRP Kuantitatif'],
            ['id_kategori' => 'RMT', 'nama_layanan' => 'ANA IF'],
            ['id_kategori' => 'RMT', 'nama_layanan' => 'ANA Profile'],
            ['id_kategori' => 'RMT', 'nama_layanan' => 'Anti ds DNA'],

            // HEPATITIS
            ['id_kategori' => 'HPT', 'nama_layanan' => 'HBsAg'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'HBsAg Ultra Sensitive'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti-HBs'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti HBc'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti HBc IgM'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'HBeAg'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti HCV'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti HAV'],
            ['id_kategori' => 'HPT', 'nama_layanan' => 'Anti HAV IgM'],

            // ELEKTROLIT
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Na,K,Cl'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Natrium'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Kalium'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Klorida'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Calcium Total'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Calcium Ion'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Magnesium'],
            ['id_kategori' => 'ELK', 'nama_layanan' => 'Fosfor Anorganik'],

            // INFEKSI LAIN
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Widal'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Dengue NS1 Antigen'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Dengue IgG dan IgM'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Salmonella Typhi IgM (TUBEX)'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Anti TJ IgG'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Anti H. Pylori IgG'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Malaria Mikroskopik'],
            ['id_kategori' => 'IFL', 'nama_layanan' => 'Anti HIV'],

            // MIKROBIOLOGI
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Kultur Resistensi Aerob'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Kultur Pus'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Kultur Urin'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Kultur Faeces'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Kultur Rectal Swab'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Pengecatan Gram'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Jamur Mikroskopis'],
            ['id_kategori' => 'MKB', 'nama_layanan' => 'Trichomonas Mikroskopis'],

            // URINALISA
            ['id_kategori' => 'URN', 'nama_layanan' => 'Urine Lengkap'],
            ['id_kategori' => 'URN', 'nama_layanan' => 'Tes Kehamilan'],

            // ANALISA FAECES
            ['id_kategori' => 'FAC', 'nama_layanan' => 'Faeces Rutin'],
            ['id_kategori' => 'FAC', 'nama_layanan' => 'Darah Samar'],

            // NARKOBA
            ['id_kategori' => 'NRK', 'nama_layanan' => 'Narkoba 3 Parameter'],
            ['id_kategori' => 'NRK', 'nama_layanan' => 'Narkoba 6 Parameter'],

            // TIROID
            ['id_kategori' => 'TRD', 'nama_layanan' => 'T3 Total'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'T4 Total'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'TSHs'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'FT3'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'FT4'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'Tiroglobulin'],
            ['id_kategori' => 'TRD', 'nama_layanan' => 'Anti-Tiroglobulin'],

            // TORCH
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Toxoplasma IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Toxoplasma IgM'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Aviditas Toxo Plasma IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Rubella IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Rubella IgM'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'CMV IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'CMV IgM'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'Aviditas CMV IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'HSV 1 IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'HSV 1 IgM'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'HSV 2 IgG'],
            ['id_kategori' => 'TRC', 'nama_layanan' => 'HSV 2 IgM'],

            // PENCERNAAN
            ['id_kategori' => 'PCR', 'nama_layanan' => 'Amylase'],
            ['id_kategori' => 'PCR', 'nama_layanan' => 'Lipase'],

            // PENANDA TUMOR
            ['id_kategori' => 'PTM', 'nama_layanan' => 'AFP'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'CEA'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'CA 19-9'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'CA 72-4'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'CA 125'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'CA 15-3'],
            ['id_kategori' => 'PTM', 'nama_layanan' => 'Cyfra 21-1'],
        ];

        foreach ($layanan as $item) {
            Layanan::firstOrCreate(
                [
                    'id_kategori' => $item['id_kategori'],
                    'nama_layanan' => $item['nama_layanan'],
                ],
                [
                    'harga' => fake()->numberBetween(50000, 500000),
                    'status' => 'aktif',
                ]
            );
        }
    }
}
