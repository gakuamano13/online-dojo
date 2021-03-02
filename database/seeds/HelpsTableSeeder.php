<?php

use Illuminate\Database\Seeder;

class HelpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('helps')->insert([
            'id' => 1,
            'title' => '使用方法',
            'text' => 'PCのブラウザで表示させて下さい',
            'flag' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
