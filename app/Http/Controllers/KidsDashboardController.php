<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomConnection;
use App\Models\Character;
use App\Models\Asset;

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

    public function storeEpisode(Request $request, Room $room)
    {
        $episode = \App\Models\Episode::create([
            'title' => 'New Episode',
            'description' => 'Add text here',
            'text' => 'Add long text here',
            'key' => 'EP-' . strtoupper(str_random(6)),
        ]);

        $room->connections()->create([
            'type' => \App\Models\Episode::class,
            'connection_id' => $episode->id,
            'assigned_by' => auth()->id(),
        ]);

        return response()->json([
            'success' => true,
            'episode' => $episode
        ]);
    }

    public function updateEpisode(Request $request, \App\Models\Episode $episode)
    {
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'text' => 'sometimes|string',
            'key' => 'sometimes|string',
        ]);

        $episode->update($request->only(['title', 'description', 'text', 'key']));

        return response()->json(['success' => true]);
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
