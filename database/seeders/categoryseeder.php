<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\category::insert([
            ['name'=>'Teknologi',],
            ['name'=>'Ekonomi',],
            ['name'=>'sosial',],
            ['name'=>'Edukasi',]
        ]);
    }
}
