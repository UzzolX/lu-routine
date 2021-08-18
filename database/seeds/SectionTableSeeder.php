<?php

use App\Section;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'name'           => '8A',
            ],
            [
                'name'           => '8B',
            ],
            [
                'name'           => '8C',
            ],
            [
                'name'           => '8D',
            ],
            [
                'name'           => '8E',
            ],
            [
                'name'           => '8F',
            ],
            [
                'name'           => '7',
            ],
            [
                'name'           => '6',
            ],
            [
                'name'           => '5A',
            ],
            [
                'name'           => '5B',
            ],
            [
                'name'           => '5C',
            ],
            [
                'name'           => '5D',
            ],
            [
                'name'           => '5E',
            ],
            [
                'name'           => '5F',
            ],
            [
                'name'           => '5G',
            ],
            [
                'name'           => '5H',
            ],
        ];
        Section::truncate();
        Section::insert($sections);
    }
}
