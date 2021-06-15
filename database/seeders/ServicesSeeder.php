<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Маникюр аппаратный',
            'price' => 550,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Маникюр + покрытие гель-лаком',
            'price' => 1150,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Маникюр + покрытие гель-лаком с укреплением',
            'price' => 1350,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Парафинотерапия рук',
            'price' => 400,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Снятие гель-лака',
            'price' => 200,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Ремонт ногтя',
            'price' => 250,
            'type_service_id' => 1
        ]);

        DB::table('services')->insert([
            'name' => 'Педикюр аппаратный',
            'price' => 650,
            'type_service_id' => 2
        ]);

        DB::table('services')->insert([
            'name' => 'Педикюр + покрытие гель-лаком',
            'price' => 1250,
            'type_service_id' => 2
        ]);

        DB::table('services')->insert([
            'name' => 'Педикюр + покрытие гель-лаком с укреплением',
            'price' => 1450,
            'type_service_id' => 2
        ]);

        DB::table('services')->insert([
            'name' => 'Парафинотерапия ног',
            'price' => 500,
            'type_service_id' => 2
        ]);

        DB::table('services')->insert([
            'name' => 'Снятие гель-лака',
            'price' => 300,
            'type_service_id' => 2
        ]);

        DB::table('services')->insert([
            'name' => 'Ремонт ногтя',
            'price' => 350,
            'type_service_id' => 2
        ]);
    }
}
