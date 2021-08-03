<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
            'name'=>'Opp1',
            'price'=>2000,
            'catg'=>'Mobile',
            'gallery'=>'https://picsum.photos/200',
            'descp'=>'On teada-tuntud fakt, umori sisestamisega jne).'
        ],
        [
            'name'=>'Opp2',
            'price'=>1000,
            'catg'=>'Mobile',
            'gallery'=>'https://picsum.photos/200',
            'descp'=>'On teada-tuntud fakt, umori sisestamisega jne).'
        ],
        [
            'name'=>'Opp3',
            'price'=>3000,
            'catg'=>'Mobile',
            'gallery'=>'https://picsum.photos/200',
            'descp'=>'On teada-tuntud fakt, umori sisestamisega jne).'
        ],
        [
            'name'=>'smasung',
            'price'=>2000,
            'catg'=>'Tv',
            'gallery'=>'https://picsum.photos/200',
            'descp'=>'On teada-tuntud fakt, umori sisestamisega jne).'
        ],
        [
            'name'=>'sony',
            'price'=>1000,
            'catg'=>'Tv',
            'gallery'=>'https://picsum.photos/200',
            'descp'=>'On teada-tuntud fakt, umori sisestamisega jne).'
        ]
        ]
    );

    }
}
