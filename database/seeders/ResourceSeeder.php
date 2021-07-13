<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('resources')->insert([
            [
                'name'=>'cotton',
                'gallery'=>'images/Cotton.png'
    
            ],
            [
                'name'=>'denim',
                'gallery'=>'images/denim.png'
    
            ],
            [
                'name'=>'felt',
                'gallery'=>'images/Felt.png'
    
            ],
            [
                'name'=>'silk',
                'gallery'=>'images/Silk.png'
    
            ],
            [
                'name'=>'velt',
                'gallery'=>'images/Velt.png'
    
            ]

        ]);
    }
}
