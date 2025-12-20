<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomConnection;
use App\Models\Character;

class KidsDashboardController extends Controller
{
    public function index()
    {
        $rooms = Room::with('creator')->latest()->get();
        $users = User::where('role', User::ROLE_KIDS)->get();
        return view('kids.dashboard', compact('rooms', 'users'));
    }

    public function show(Room $room)
    {
        $room->load(['connections.connection', 'creator']);
        return view('kids.rooms.show', compact('room'));
    }

    public function connect(Request $request, Room $room)
    {
        $request->validate([
            'ids' => 'required|array',
            'type' => 'required|string|in:character,asset',
        ]);

        $modelClass = $request->type === 'character' ? Character::class : Asset::class;

        foreach ($request->ids as $id) {
            $exists = $room->connections()
                ->where('type', $modelClass)
                ->where('connection_id', $id)
                ->exists();

            if (!$exists) {
                $room->connections()->create([
                    'type' => $modelClass,
                    'connection_id' => $id,
                    'assigned_by' => auth()->id(),
                ]);
            }
        }

        return redirect()->back()->with('success', ucfirst($request->type) . 's added to room successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'assigned_at' => 'nullable|exists:users,id',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('rooms', 'public');
            $thumbnailPath = '/storage/' . $thumbnailPath;
        }

        Room::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $thumbnailPath,
            'assigned_at' => $request->assigned_at,
            'created_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Room created successfully!');
    }
}
