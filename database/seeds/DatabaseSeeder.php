<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(NavisTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(RecommendsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(HelpsTableSeeder::class);
    }
}
