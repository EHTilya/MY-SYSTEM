<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name'=>'shati fupi'
            ],
            [
                'name'=>'shati refu'
            ],
            [
                'name'=>'suruali men'
            ],
            [
                'name'=>'suruali women'
            ],
            [
                'name'=>'kaptula'
            ],
            [
                'name'=>'sketi'
            ]
        ]
            );
    }
}
