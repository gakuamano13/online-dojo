<?php

use Illuminate\Database\Seeder;

class NavisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navis')->insert([
            'id' => 1,
            'name' => 'izumi satoru',
            'email' => 'navi@test.jp',
            'flag' => 1,
            'login_id' => '55',
            'pass' => 'non',
            'tel' => '08032103210',
            'photo' => 'navi.jpg',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
