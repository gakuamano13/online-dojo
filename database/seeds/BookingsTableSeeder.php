<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'id' => 1,
            'bookings_students_id' => 1,
            'bookings_datetime' => '2021-02-27 17:31:38',
            'bookings_lessons_id' => 1,
            'bookings_courses_id' => 1,
            'bookings_flag' => 1,
            'created_at' => '2021-02-27 17:31:38',
            'updated_at' => '2021-02-27 17:31:38',
        ]);
    }
}
