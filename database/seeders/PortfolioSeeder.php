<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'master_id' => 1,
            'image' => 'p1.jpg',
            'date' => "2021-01-01",
            'description' => 'Нежный френч'
        ]);

        DB::table('portfolios')->insert([
            'master_id' => 1,
            'image' => 'p2.jpg',
            'date' => "2021-01-01",
            'description' => 'Яркий френч'
        ]);

        DB::table('portfolios')->insert([
            'master_id' => 1,
            'image' => 'p3.jpg',
            'date' => "2021-01-01",
            'description' => 'Френч'
        ]);
    }
}
