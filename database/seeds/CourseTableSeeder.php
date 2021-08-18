<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'course_code' => 'CEE-2110',
                'course_title' => 'Engineering Drawing'
            ],
            [
                'course_code' => 'CHE-2311',
                'course_title' => 'Chemistry'
            ],
            [
                'course_code' => 'CHE-2312',
                'course_title' => 'Chemistry Laboratory'
            ],
            [
                'course_code' => 'CSE-1111',
                'course_title' => 'Introduction to Computers'
            ],
            [
                'course_code' => 'CSE-1112',
                'course_title' => 'Introduction to Computers Sessional'
            ],
            [
                'course_code' => 'ENG-1111',
                'course_title' => 'English Reading and Speaking '
            ],
            [
                'course_code' => 'MAT-1111',
                'course_title' => 'Differential and Integral Calculus'
            ],
        ];
        Course::truncate();
        Course::insert($courses);
    }
}
