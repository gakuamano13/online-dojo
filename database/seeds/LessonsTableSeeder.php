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
            [
            'id' => 1,
            'title' => '空手BasicLesson',
            'text' => '空手の基礎を稽古します',
            'price' => 1000,
            'date' => '2021-03-05 13:00:00',
            'week' => 1,
            'url' => 'http://localhost/online-dojo/public/meeting',
            'pass' => 'basic01',
            'photo' => 'karate_basic.jpg',
            'video' => 'https://youtu.be/maLniMSaEcE',
            'teachers_id' => 1,
            'navis_id' => 2,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
            ],[
            'id' => 2,
            'title' => '空手テクニック：回し蹴り',
            'text' => '回し蹴りの蹴り方を説明します',
            'price' => 1000,
            'date' => '2021-03-05 13:00:00',
            'week' => 7,
            'url' => 'https://meet.jit.si/kick01',
            'pass' => 'kick01',
            'photo' => 'kick.jpg',
            'video' => 'https://youtu.be/SZ5T0wblWvk',
            'teachers_id' => 2,
            'navis_id' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
            ]
        ]);

    }
}
