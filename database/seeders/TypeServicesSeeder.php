<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_services')->insert([
            'name' => 'Маникюр'
        ]);

        DB::table('type_services')->insert([
            'name' => 'Педикюр'
        ]);
    }
}
