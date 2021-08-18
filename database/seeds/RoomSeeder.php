<?php

use App\Models\Settings\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classeRooms = [
            [
                'room_code' => 'ECL',
                'room_title' => 'Electronics and Circuit Lab'
            ],
            [
                'room_code' => 'ACL-1',
                'room_title' => 'Advanced Computer Lab 1'
            ],
            [
                'room_code' => 'PhL',
                'room_title' => 'Physics Lab'
            ],
            [
                'room_code' => 'ChL',
                'room_title' => 'Chemistry Lab'
            ],
            [
                'room_code' => 'ACL-2',
                'room_title' => 'Advanced Computer Lab 2'
            ],
            [
                'room_code' => 'NL',
                'room_title' => 'Network Lab'
            ],
            [
                'room_code' => 'AB-1',
                'room_title' => 'Academic Building 1'
            ],
            [
                'room_code' => 'R-302',
                'room_title' => 'R-302 CSE'
            ],
            [
                'room_code' => 'R-304',
                'room_title' => 'R-304 CSE'
            ],
            [
                'room_code' => 'R-306',
                'room_title' => 'R-306 CSE'
            ],
            [
                'room_code' => 'R-309',
                'room_title' => 'R-309 CSE'
            ],
            [
                'room_code' => 'G-2',
                'room_title' => 'Gallery 2 (2nd Floor)'
            ],
            [
                'room_code' => 'G-3',
                'room_title' => 'Gallery 3 (3nd Floor)'
            ],
            [
                'room_code' => 'GL',
                'room_title' => 'General Lab, AB-1'
            ],
        ];
        Room::truncate();
        Room::insert($classeRooms);
    }
}
