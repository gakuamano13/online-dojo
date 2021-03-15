<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'id' => 1,
            'title' => '空手基礎：回し蹴り',
            'text' => '回し蹴りの蹴り方を説明します',
            'price' => 1000,
            'date' => '2021-03-05 13:00:00',
            'url' => 'https://meet.jit.si/kick01',
            'pass' => 'kick01',
            'photo' => 'kick.jpg',
            'video' => 'https://youtu.be/SZ5T0wblWvk',
            'teachers_id' => 1,
            'navis_id' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);

    }
}
