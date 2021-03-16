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
            [
            'navis_id' => 1,
            'navis_name' => 'izumi satoru',
            'navis_email' => 'izumi@test.jp',
            'navis_flag' => 1,
            'navis_login_id' => '55',
            'navis_pass' => 'non',
            'navis_tel' => '08032103210',
            'navis_photo' => 'navi.jpg',
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
            ],[
            'navis_id' => 2,
            'navis_name' => 'amano gaku',
            'navis_email' => 'amano@test.jp',
            'navis_flag' => 1,
            'navis_login_id' => '22',
            'navis_pass' => 'non',
            'navis_tel' => '08012341234',
            'navis_photo' => 'amano_navi.jpg',
            'created_at' => '2021-03-16 08:30:00',
            'updated_at' => '2021-03-16 08:30:00',
            ]
        ]);
    }
}
