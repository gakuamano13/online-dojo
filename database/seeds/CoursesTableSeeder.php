<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'id' => 1,
            'courses_date' => '2021-03-30',
            'courses_time' => '13:00:00',
            'courses_week' => 1,
            'courses_lessons_id' => 1,
            'courses_flag' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
