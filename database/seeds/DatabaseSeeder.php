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
        $this->call([
            UsersTableSeeder::class,
            RoomSeeder::class,
            BatchTableSeeder::class,
            SectionTableSeeder::class,
            TeacherTableSeeder::class,
            CourseTableSeeder::class,
            //SundayTableSeeder::class,
        ]);
    }
}
