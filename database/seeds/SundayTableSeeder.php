<?php

use App\Models\Days\Sunday;
use Illuminate\Database\Seeder;

class SundayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sunday = [
            [
                'section_id'           => 1,
                'batch_id'           => 1,
                'course_id'           => 1,
                'teacher_id'           => 1,
                'room_id'           => 1,
                'class_start'           => '10:00:00',
                'class_end'           => '11:00:00',
                'break'           => 'Prayer & Lunch Break ( 01:00 PM - 01:50 PM)'
            ],
        ];
        Sunday::truncate();
        Sunday::insert($sunday);
    }
}
