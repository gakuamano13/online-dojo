<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'lessons_title' => '空手BasicLesson',
            'lessons_text' => '空手の基礎を稽古します',
            'lessons_price' => 1000,
            'lessons_date' => '2021-03-05 13:00:00',
            'lessons_week' => 1,
            'lessons_url' => 'http://localhost/online-dojo/public/meeting',
            'lessons_pass' => 'basic01',
            'lessons_photo' => 'karate_basic.jpg',
            'lessons_video' => 'https://youtu.be/maLniMSaEcE',
            'teachers_id' => 1,
            'navis_id' => 2,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
            ],[
            'id' => 2,
            'lessons_title' => '空手テクニック：回し蹴り',
            'lessons_text' => '回し蹴りの蹴り方を説明します',
            'lessons_price' => 1000,
            'lessons_date' => '2021-03-05 13:00:00',
            'lessons_week' => 7,
            'lessons_url' => 'https://meet.jit.si/kick01',
            'lessons_pass' => 'kick01',
            'lessons_photo' => 'kick.jpg',
            'lessons_video' => 'https://youtu.be/SZ5T0wblWvk',
            'teachers_id' => 2,
            'navis_id' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
            ],[
                'id' => 3,
                'lessons_title' => '空手AdvanceLesson',
                'lessons_text' => '空手上級者向けのレッスンです',
                'lessons_price' => 0,
                'lessons_date' => '2021-03-05 13:00:00',
                'lessons_week' => 7,
                'lessons_url' => 'non',
                'lessons_pass' => 'non',
                'lessons_photo' => 'Snapshot_11.png',
                'lessons_video' => 'https://youtu.be/jxqLpfzrxL4',
                'teachers_id' => 1,
                'navis_id' => 1,
                'created_at' => '2021-02-27 17:31:38',
                'updated_at' => '2021-02-27 17:31:38',
            ]
        ]);
    }
}
