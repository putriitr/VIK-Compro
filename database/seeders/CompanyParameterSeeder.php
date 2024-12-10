<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compro_parameter')->insert([
            [
                'email' => 'business@vik.co.id',
                'no_telepon' => '(021) 23951673',
                'no_wa' => '(021) 23951673',
                'alamat' => 'Jl. Pal Putih No.193A, Kramat, Senen, Jakarta Pusat 10450',
                'maps' => 'None',
                'instagram' => 'None',
                'linkedin' => 'None',
                'ekatalog' => 'None',
                'nama_perusahaan' => 'PT. Virtual Inter Komunika',
                'sejarah_singkat' => 'blm ada',
                'whatsapp_1' => '(021) 23951673',
                'whatsapp_2' => '(021) 23951673',
                'visimisi_1' => '',
                'visimisi_2' => '',
                'visimisi_3' => '',
                'nomor_induk_berusaha' => '',
                'surat_keterangan' => '',
                'website' => 'https://vik.co.id/',
            ]
        ]);
    }
}
