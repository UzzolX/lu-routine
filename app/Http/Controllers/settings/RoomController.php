<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\Room;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::latest()->paginate(5);
        return view('admin.room.room-index', compact('room'));
    }

    public function create()
    {
        return view('admin.room.room-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_code'    =>  'required',
            'room_title'   =>  'required'
        ]);

        $form_data = array(
            'room_code'   => $request->room_code,
            'room_title'  => $request->room_title
        );

        Room::create($form_data);
        return redirect('dashboard/room')->with('message', 'Room created successfully.');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.room-edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->room_code = $request->room_code;
        $room->room_title = $request->room_title;
        $room->save();
        return redirect('dashboard/room')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('dashboard/room')->with('message', 'Data is successfully deleted');
    }

}
