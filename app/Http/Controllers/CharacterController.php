<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::latest()->get();
        return view('kids.characters.index', compact('characters'));
    }

    public function apiIndex()
    {
        return response()->json(Character::latest()->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'nullable|string',
            'gender' => 'nullable|string',
            'short_description' => 'nullable|string',
            'detailed_description' => 'nullable|string',
            'assets.*' => 'nullable|file|mimes:pdf,mp4,mov,avi,jpeg,png,jpg,gif|max:10240',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('characters/thumbnails', 'public');
            $thumbnailPath = '/storage/' . $thumbnailPath;
        }

        $assetsPaths = [];
        if ($request->hasFile('assets')) {
            foreach ($request->file('assets') as $file) {
                $path = $file->store('characters/assets', 'public');
                $assetsPaths[] = '/storage/' . $path;
            }
        }

        Character::create([
            'name' => $request->name,
            'thumbnail' => $thumbnailPath,
            'assets' => $assetsPaths,
            'age' => $request->age,
            'gender' => $request->gender,
            'short_description' => $request->short_description,
            'detailed_description' => $request->detailed_description,
        ]);

        return redirect()->back()->with('success', 'Character created successfully!');
    }

    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'nullable|string',
            'gender' => 'nullable|string',
            'short_description' => 'nullable|string',
            'detailed_description' => 'nullable|string',
            'assets.*' => 'nullable|file|mimes:pdf,mp4,mov,avi,jpeg,png,jpg,gif|max:10240',
        ]);

        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'short_description' => $request->short_description,
            'detailed_description' => $request->detailed_description,
        ];

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('characters/thumbnails', 'public');
            $data['thumbnail'] = '/storage/' . $thumbnailPath;
        }

        if ($request->hasFile('assets')) {
            $assetsPaths = [];
            foreach ($request->file('assets') as $file) {
                $path = $file->store('characters/assets', 'public');
                $assetsPaths[] = '/storage/' . $path;
            }
            $data['assets'] = $assetsPaths;
        }

        $character->update($data);

        return redirect()->back()->with('success', 'Character updated successfully!');
    }

    public function destroy(Character $character)
    {
        // Delete related room connections first
        \App\Models\RoomConnection::where('type', Character::class)
            ->where('connection_id', $character->id)
            ->delete();

        $character->delete();
        return redirect()->back()->with('success', 'Character deleted successfully!');
    }
}
