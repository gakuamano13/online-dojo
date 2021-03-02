<?php

use Illuminate\Database\Seeder;

class RecommendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recommends')->insert([
            'id' => 1,
            'title' => '空手基礎講座',
            'lessons_id' => 1,
            'text' => '空手初心者の方に最適な講座です',
            'flag' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
