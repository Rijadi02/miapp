<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomConnection;
use App\Models\Character;
use App\Models\Asset;
use App\Models\Episode;

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
        $characters = Character::latest()->get();
        $assets = Asset::whereNull('episode_id')->latest()->get(); // Only room assets
        // Filter only 'kids' users
        $users = User::where('role', User::ROLE_KIDS)->get();
        
        $room->load(['connections.connection', 'creator']);
        return view('kids.rooms.show', compact('room', 'characters', 'assets', 'users'));
    }

    public function connect(Request $request, Room $room)
    {
        $request->validate([
            'ids' => 'required|array',
            'type' => 'required|string|in:character,asset',
        ]);

        $modelClass = $request->type === 'character' ? Character::class : Asset::class;

        foreach ($request->ids as $id) {
            $room->connections()->firstOrCreate([
                'connection_type' => $modelClass,
                'connection_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', ucfirst($request->type) . 's added to room successfully!');
    }

    public function storeEpisode(Request $request, Room $room)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'assigned_to' => 'nullable|exists:users,id',
            'promts' => 'nullable|string',
        ]);

        $episode = Episode::create([
            'title' => $request->title,
            'description' => 'Një përshkrim i shkurtër...',
            'text' => 'Teksti i detajuar...',
            'key' => 'EP' . strtoupper(\Illuminate\Support\Str::random(6)),
            'assigned_to' => $request->assigned_to,
            'promts' => $request->promts,
        ]);

        $room->connections()->create([
            'connection_type' => 'App\Models\Episode',
            'connection_id' => $episode->id,
        ]);

        return response()->json(['success' => true]);
    }

    public function updateEpisode(Request $request, Episode $episode)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'assigned_to' => 'nullable|exists:users,id',
            'promts' => 'nullable|string',
        ]);
        
        $episode->update($request->only(['title', 'description', 'text', 'key', 'assigned_to', 'promts']));
        
        return response()->json(['success' => true]);
    }

    public function destroyEpisode(Episode $episode)
    {
        // Delete the room connection first
        \App\Models\RoomConnection::where('connection_type', 'App\Models\Episode')
            ->where('connection_id', $episode->id)
            ->delete();

        $episode->delete();

        return redirect()->back()->with('success', 'Episodi u fshi me sukses!');
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
