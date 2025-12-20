<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asset;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::latest()->get();
        return view('kids.assets.index', compact('assets'));
    }

    public function apiIndex()
    {
        return response()->json(Asset::latest()->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:audio,video,pdf,text,zip,image',
            'asset' => 'required|file|max:51200', // 50MB max
        ]);

        $assetPath = null;
        if ($request->hasFile('asset')) {
            $path = $request->file('asset')->store('kids/assets', 'public');
            $assetPath = '/storage/' . $path;
        }

        Asset::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'asset' => $assetPath,
            'created_by' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Asset created successfully!');
    }

    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:audio,video,pdf,text,zip,image',
            'asset_file' => 'nullable|file|max:51200', 
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        if ($request->hasFile('asset_file')) {
            $path = $request->file('asset_file')->store('kids/assets', 'public');
            $data['asset'] = '/storage/' . $path;
        }

        $asset->update($data);

        return redirect()->back()->with('success', 'Asset updated successfully!');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->back()->with('success', 'Asset deleted successfully!');
    }
}
