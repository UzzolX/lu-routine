<?php

use App\Batch;
use Illuminate\Database\Seeder;

class BatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batches = [
            [
                'name'           => '45',
            ],
            [
                'name'           => '46',
            ],
            [
                'name'           => '47',
            ],
            [
                'name'           => '48',
            ],
            [
                'name'           => '49',
            ],
            [
                'name'           => '50',
            ],
            [
                'name'           => '51',
            ],
            [
                'name'           => '52',
            ],
            [
                'name'           => '53',
            ],
            [
                'name'           => '54',
            ],
        ];
        Batch::truncate();
        Batch::insert($batches);
    }
}
