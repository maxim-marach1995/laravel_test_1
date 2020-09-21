<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuitarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guitar_types')->insert([
            ['type' => 'Электрогитара'],
            ['type' => 'Акустическая гитара'],
            ['type' => 'Укулеле'],
        ]);
    }
}
