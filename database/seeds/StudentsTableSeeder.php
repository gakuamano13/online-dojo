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
            'students_name' => 'ヤマダ　タロウ',
            'students_email' => 'student@test.jp',
            'students_flag' => 1,
            'students_login_id' => '1',
            'students_pass' => 'non',
            'students_tel' => '08099999999',
            'students_photo' => 'karate.png',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
