<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use App\Models\TranslationVersion;
use Illuminate\Http\Request;

class TranslationWorkspaceController extends Controller
{
    /**
     * Show the code entry form
     */
    public function index()
    {
        return view('translation.code-entry');
    }

    /**
     * Validate code and redirect to workspace
     */
    public function validateCode(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $translation = Translation::where('code', $request->code)->first();

        if (!$translation) {
            return back()->withErrors(['code' => 'Kodi nuk është valid.']);
        }

        return redirect()->route('translation.workspace', $request->code);
    }

    /**
     * Show the translation workspace
     */
    public function workspace($code)
    {
        $translation = Translation::where('code', $code)->firstOrFail();

        // Get the latest version or use the main albanian_text
        $latestVersion = $translation->versions()->first();
        $currentText = $latestVersion ? $latestVersion->albanian_text : $translation->albanian_text;

        // Get only the last 8 versions for navigation
        $versions = $translation->versions()->limit(8)->get();

        return view('translation.workspace', compact('translation', 'currentText', 'versions'));
    }

    /**
     * Auto-save translation version (called on period insertion)
     */
    public function autoSave(Request $request, $code)
    {
        $translation = Translation::where('code', $code)->firstOrFail();

        $request->validate([
            'albanian_text' => 'required',
        ]);

        // Get the next version number
        $latestVersion = $translation->versions()->first();
        $versionNumber = $latestVersion ? $latestVersion->version_number + 1 : 1;

        // Create new version
        $version = TranslationVersion::create([
            'translation_id' => $translation->id,
            'albanian_text' => $request->albanian_text,
            'version_number' => $versionNumber,
        ]);

        // Also update the main translation
        $translation->albanian_text = $request->albanian_text;
        $translation->save();

        return response()->json([
            'success' => true,
            'version_id' => $version->id,
            'version_number' => $versionNumber,
            'created_at' => $version->created_at->format('d/m/Y H:i:s'),
        ]);
    }

    /**
     * Load a specific version
     */
    public function loadVersion($code, $versionId)
    {
        $translation = Translation::where('code', $code)->firstOrFail();
        $version = TranslationVersion::where('translation_id', $translation->id)
            ->where('id', $versionId)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'albanian_text' => $version->albanian_text,
            'version_number' => $version->version_number,
            'created_at' => $version->created_at->format('d/m/Y H:i:s'),
        ]);
    }

    /**
     * Change the active arabic file
     */
    public function changeArabicFile($code, Request $request)
    {
        $translation = Translation::where('code', $code)->firstOrFail();

        $request->validate([
            'file_index' => 'required|integer',
        ]);

        $fileIndex = $request->file_index;
        $arabicFiles = $translation->arabic_files ?? [];

        if (!isset($arabicFiles[$fileIndex])) {
            return response()->json(['success' => false, 'message' => 'File not found'], 404);
        }

        return response()->json([
            'success' => true,
            'file_path' => '/storage/' . $arabicFiles[$fileIndex],
        ]);
    }

    /**
     * Upload additional Arabic files
     */
    public function uploadFiles($code, Request $request)
    {
        $translation = Translation::where('code', $code)->firstOrFail();

        $request->validate([
            'arabic_files.*' => 'required|file|mimes:pdf,doc,docx|max:51200', // Max 50MB
        ]);

        $arabicFiles = $translation->arabic_files ?? [];

        if ($request->hasFile('arabic_files')) {
            foreach ($request->file('arabic_files') as $file) {
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $randomNumber = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
                $fileName = $originalName . '_' . $randomNumber . '.' . $extension;
                $path = $file->storeAs('uploads', $fileName, 'public');
                $arabicFiles[] = $path;
            }

            $translation->arabic_files = $arabicFiles;
            $translation->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'Files uploaded successfully',
            'files_count' => count($arabicFiles),
        ]);
    }
}
