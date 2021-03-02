<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => 1,
            'name' => 'ヤマダ　タロウ',
            'email' => 'student@test.jp',
            'flag' => 1,
            'login_id' => '1',
            'pass' => 'non',
            'tel' => '08099999999',
            'photo' => 'karate.png',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
