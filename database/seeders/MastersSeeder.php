<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MastersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masters')->insert([
            'name' => 'Алина',
            'surname' => 'Иванова',
            'lastname' => 'Александровна',
            'age' => 19,
            'experience' => '3',
            'birthday' => '2001-09-19',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'alina.ivanova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);

        DB::table('masters')->insert([
            'name' => 'Анастасия',
            'surname' => 'Власова',
            'lastname' => 'Константиновна',
            'age' => 23,
            'experience' => '10',
            'birthday' => '1998-03-14',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'anastasia.vlasova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);

        DB::table('masters')->insert([
            'name' => 'Мария',
            'surname' => 'Иванова',
            'lastname' => 'Александровна',
            'age' => 19,
            'experience' => '2',
            'birthday' => '2001-09-19',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'maria.ivanova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);

        DB::table('masters')->insert([
            'name' => 'Екатерина',
            'surname' => 'Иванова',
            'lastname' => 'Александровна',
            'age' => 25,
            'experience' => '1',
            'birthday' => '2001-09-19',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'ekaterina.ivanova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);

        DB::table('masters')->insert([
            'name' => 'Ксения',
            'surname' => 'Иванова',
            'lastname' => 'Александровна',
            'age' => 25,
            'experience' => '12',
            'birthday' => '2001-09-19',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'ksenia.ivanova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);

        DB::table('masters')->insert([
            'name' => 'Виктория',
            'surname' => 'Иванова',
            'lastname' => 'Александровна',
            'age' => 19,
            'experience' => '6',
            'birthday' => '2001-09-19',
            'address' => 'Адрес',
            'photo' => 'master1.jpg',
            'email' => 'victoria.ivanova@coloron.com',
            'characteristic' => 'В своей работе мастеру маникюра  порой приходится становиться настоящим художником. Сегодня модным стало нанесение на ногти авторского рисунка. Ногти также украшаются аппликацией, иногда мелкими стразами.',
            'phonenumber' => 387438716
        ]);
    }
}
