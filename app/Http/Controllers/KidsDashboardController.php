<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

class KidsDashboardController extends Controller
{
    public function index()
    {
        $rooms = Room::with('creator')->latest()->get();
        $users = User::all(); // To allow assigning users
        return view('kids.dashboard', compact('rooms', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|string', // Could be URL or file path
            'assigned_at' => 'nullable|exists:users,id',
        ]);

        Room::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $request->thumbnail,
            'assigned_at' => $request->assigned_at,
            'created_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Room created successfully!');
    }
}
