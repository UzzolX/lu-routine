<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'M Shafee',
                'user_type'           => 'admin',
                'email'          => 'mshafee@gmail.com',
                'password'       => bcrypt('mshafee@gmail.com')
            ],
            [
                'name'           => 'Ikbal A',
                'user_type'           => 'admin',
                'email'          => 'ikbal@gmail.com',
                'password'       => bcrypt('ikbal@gmail.com')
            ],
            [
                'name'           => 'Anisul',
                'user_type'           => 'admin',
                'email'          => 'anisul@gmail.com',
                'password'       => bcrypt('anisul@gmail.com')
            ],
            [
                'name'           => 'Uxxol',
                'user_type'           => 'admin',
                'email'          => 'uzzolah@gmail.com',
                'password'       => bcrypt('uzzolah@gmail.com')
            ],
        ];
        User::truncate();
        User::insert($users);
    }
}
