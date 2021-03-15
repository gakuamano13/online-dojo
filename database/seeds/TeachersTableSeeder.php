<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'teachers_id' => 1,
            'teachers_name' => '泉　智',
            'teachers_email' => 'teacher@test.jp',
            'teachers_flag' => 1,
            'teachers_login_id' => '1',
            'teachers_pass' => 'non',
            'teachers_tel' => '08012341234',
            'teachers_photo' => 'teacher.jpg',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
