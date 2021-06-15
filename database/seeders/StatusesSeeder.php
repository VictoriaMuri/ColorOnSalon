<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'Оформлено',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Отменено',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Выполнено',
        ]);
    }
}
