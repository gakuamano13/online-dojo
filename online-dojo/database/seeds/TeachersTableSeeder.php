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
            'id' => 1,
            'name' => '泉　智',
            'email' => 'teacher@test.jp',
            'flag' => 1,
            'login_id' => '1',
            'pass' => 'non',
            'tel' => '08012341234',
            'photo' => 'teacher.jpg',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
