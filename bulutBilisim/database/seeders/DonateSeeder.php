<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donates')->insert([
            [
            'name'=>'Kışlık Çocuk Ayakkabısı',
            'price'=>'200',
            'category'=>'giyim',
            'description'=>'Kışlık çocuk ayakkabısı',
            'gallery'=>'https://productimages.hepsiburada.net/s/25/600-800/10109930373170.jpg/format:webp'
            ],
            [
                'name'=>'Kışlık Çocuk Mont',
                'price'=>'150',
                'category'=>'giyim',
                'description'=>'Kışlık çocuk mont',
                'gallery'=>'https://productimages.hepsiburada.net/s/206/600-800/110000181875025.jpg/format:webp'
            ],
            [
                    'name'=>'1 Aylık Erzak Kolisi',
                    'price'=>'300',
                    'category'=>'yiyecek',
                    'description'=>'1 Aylık Yardım Kolisi',
                    'gallery'=>'https://productimages.hepsiburada.net/s/202/550/110000175851137.jpg/format:webp'
            ],
            [
                        'name'=>'300 TL Değerinde Fatura Desteği',
                        'price'=>'300',
                        'category'=>'fatura',
                        'description'=>'fatura desteği',
                        'gallery'=>'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp'
            ],
            [
                            'name'=>'400 TL Değerinde Fatura Desteği',
                            'price'=>'400',
                            'category'=>'fatura',
                            'description'=>'fatura desteği',
                            'gallery'=>'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp'
            ],
            [
                                'name'=>'500 TL Değerinde Fatura Desteği',
                                'price'=>'500',
                                'category'=>'fatura',
                                'description'=>'fatura desteği',
                                'gallery'=>'https://productimages.hepsiburada.net/s/179/550/110000143593538.jpg/format:webp'
            ]
            ]);
    }
}
