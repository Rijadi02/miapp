<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use ZipArchive;

class ToolController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('admin.tools.index', compact('tools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'icon' => 'nullable|string',
            'zip_file' => 'nullable|file|mimes:zip|max:51200', // max 50MB
        ]);

        $tool = new Tool();
        $tool->title = $request->title;
        $tool->icon = $request->icon;
        
        if ($request->hasFile('zip_file')) {
            $file = $request->file('zip_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            if (!File::isDirectory(public_path('uploads/tools'))) {
                File::makeDirectory(public_path('uploads/tools'), 0755, true);
            }
            $file->move(public_path('uploads/tools'), $fileName);
            $tool->files = $fileName;
        }

        $tool->save();

        // Extract ZIP if exists
        if ($tool->files) {
            $originalName = pathinfo($tool->files, PATHINFO_FILENAME);
            // Remove the timestamp prefix if it exists (assuming time() . '_' format)
            $subfolder = strpos($originalName, '_') !== false ? substr($originalName, strpos($originalName, '_') + 1) : $originalName;

            $this->extractTool($tool, $subfolder);
            // Save the link where it extracted the files
            $tool->link = 'tools/' . $tool->id . '/' . $subfolder . '/index.html';
            $tool->save();
        }

        return redirect()->route('tools.index')->with('success', 'Tool created and extracted successfully.');
    }

    public function destroy(Tool $tool)
    {
        // Remove ZIP file
        if ($tool->files) {
            $zipPath = public_path('uploads/tools/' . $tool->files);
            if (File::exists($zipPath)) {
                File::delete($zipPath);
            }
        }

        // Remove extracted folder
        $extractPath = public_path('tools/' . $tool->id);
        if (File::isDirectory($extractPath)) {
            File::deleteDirectory($extractPath);
        }

        $tool->delete();

        return back()->with('success', 'Tool deleted successfully.');
    }

    private function extractTool(Tool $tool, $subfolder)
    {
        $zipPath = public_path('uploads/tools/' . $tool->files);
        $extractPath = public_path('tools/' . $tool->id . '/' . $subfolder);

        if (!File::isDirectory($extractPath)) {
            File::makeDirectory($extractPath, 0755, true);
        }

        $zip = new ZipArchive;
        if ($zip->open($zipPath) === TRUE) {
            $zip->extractTo($extractPath);
            $zip->close();
        }
    }
}
