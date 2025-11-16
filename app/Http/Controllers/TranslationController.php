<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translations = Translation::orderBy('created_at', 'desc')->get();
        return view('admin.translation', compact('translations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'translator' => 'required',
                'title' => 'required',
                'code' => 'required',
                'arabic_text' => 'required',
                'albanian_text' => 'required',
                'arabic_files.*' => 'nullable|file',
                'albanian_file' => 'nullable|file',
            ]
        );

        $translation = new Translation();
        $translation->translator = $data['translator'];
        $translation->title = $data['title'];
        $translation->code = $data['code'];
        $translation->arabic_text = $data['arabic_text'];
        $translation->albanian_text = $data['albanian_text'];

        $arabicFiles = [];
        if (request()->hasFile('arabic_files')) {
            foreach (request()->file('arabic_files') as $file) {
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $randomNumber = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
                $fileName = $originalName . '_' . $randomNumber . '.' . $extension;
                $path = $file->storeAs('uploads', $fileName, 'public');
                $arabicFiles[] = $path;
            }
            $translation->arabic_files = $arabicFiles;
        }

        if (request('albanian_file')) {
            $inputs['albanian_file'] = request('albanian_file')->store('uploads', 'public');
            $translation->albanian_file = $inputs['albanian_file'];
        }

        $translation->save();

        return redirect('/admin/translations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function show(Translation $translation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function edit(Translation $translation)
    {
        $translations = Translation::all();
        return view('admin.translation', compact('translations', 'translation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Translation $translation)
    {
        $data = request()->validate(
            [
                'translator' => 'required',
                'title' => 'required',
                'code' => 'required',
                'arabic_text' => 'required',
                'albanian_text' => 'required',
                'arabic_files.*' => 'nullable|file',
                'albanian_file' => 'nullable|file',
            ]
        );

        $translation->translator = $data['translator'];
        $translation->title = $data['title'];
        $translation->code = $data['code'];
        $translation->arabic_text = $data['arabic_text'];
        $translation->albanian_text = $data['albanian_text'];

        if (request()->hasFile('arabic_files')) {
            $arabicFiles = $translation->arabic_files ?? [];
            foreach (request()->file('arabic_files') as $file) {
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $randomNumber = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
                $fileName = $originalName . '_' . $randomNumber . '.' . $extension;
                $path = $file->storeAs('uploads', $fileName, 'public');
                $arabicFiles[] = $path;
            }
            $translation->arabic_files = $arabicFiles;
        }

        if (request('albanian_file')) {
            $inputs['albanian_file'] = request('albanian_file')->store('uploads', 'public');
            $translation->albanian_file = $inputs['albanian_file'];
        }

        $translation->save();

        return redirect('/admin/translations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translation $translation)
    {
        $translation->delete();
        session()->flash('translation-deleted', 'Translation deleted: ' . $translation->title);
        return back();
    }
}
