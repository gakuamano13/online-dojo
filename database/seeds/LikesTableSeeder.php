<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'id' => 1,
            'likes_students_id' => 1,
            'likes_teachers_id' => 1,
            'likes_navis_id' => 1,
            'likes_lessons_id' => 1,
            'likes_courses_id' => 1,
            'likes_flag' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
