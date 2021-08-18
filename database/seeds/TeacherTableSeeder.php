<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'teacher_code' => 'SKB',
                'teacher_name' => 'Shafkat Kibria',
                'teacher_position' => 'Assistant Professor & Head (Acting)'
            ],
            [
                'teacher_code' => 'RMS',
                'teacher_name' => 'Rumel M.S. Rahman Pir',
                'teacher_position' => 'Associate Professor'
            ],
            [
                'teacher_code' => 'AHQ',
                'teacher_name' => 'Arafat Habib Quraishi',
                'teacher_position' => 'Senior Lecturer'
            ],
            [
                'teacher_code' => 'EBH ',
                'teacher_name' => 'Ebrahim Hossain',
                'teacher_position' => 'Senior Lecturer'
            ],
            [
                'teacher_code' => 'AAC',
                'teacher_name' => 'Adil Ahmed Chowdhury',
                'teacher_position' => 'Lecturer'
            ],
            [
                'teacher_code' => 'MJH',
                'teacher_name' => 'Md. Jaber Hossain',
                'teacher_position' => 'Lecturer'
            ],
            [
                'teacher_code' => 'STA',
                'teacher_name' => 'Syeda Tamanna Alam',
                'teacher_position' => 'Lecturer'
            ],
            [
                'teacher_code' => 'SRK',
                'teacher_name' => 'Saidur Rahman Kohinoor',
                'teacher_position' => 'Lecturer'
            ],
        ];
        Teacher::truncate();
        Teacher::insert($teachers);
    }
}
