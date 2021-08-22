<?php

namespace App\Http\Controllers;

use App\Models\Recitation;
use App\Models\Reciter;
use Illuminate\Http\Request;

class RecitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Reciter $reciter)
    {
        $recitations = $reciter->recitations;
        return view('admin.recitation', compact('recitations', 'reciter'));
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
    public function store(Request $request, $reciter)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'surah' => 'required',
                'ayahs' => 'required',
                'link' => '',
                'audio' => '',

            ]
        );

        $recitation = new \App\Models\Recitation();


        $recitation->title = $data['title'];
        $recitation->surah = $data['surah'];
        $recitation->ayahs = $data['ayahs'];
        $recitation->link = $data['link'];

        if (request('audio')) {
            $inputs['audio'] = request('audio')->store('uploads', 'public');
            $recitation->audio = $inputs['audio'];
        }

        $recitation->reciter_id = $reciter;



        $recitation->save();

        // if ($chapter->isDirty('name')) {
        //     session()->flash('chapter-add', 'Chapter added: ' . request('name'));
        // } else {
        //     session()->flash('chapter-add', 'Nothing to add: ' . request('name'));
        // }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recitation  $recitation
     * @return \Illuminate\Http\Response
     */
    public function show(Recitation $recitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recitation  $recitation
     * @return \Illuminate\Http\Response
     */
    public function edit(Recitation $recitation)
    {
        $recitations = Recitation::all()->where('reciter_id', '=', $recitation->reciter_id);
        return view('admin/recitation', compact('recitations', 'recitation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recitation  $recitation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recitation $recitation)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'surah' => 'required',
                'ayahs' => 'required',
                'link' => '',
                'audio' => '',

            ]
        );



        $recitation->title = $data['title'];
        $recitation->surah = $data['surah'];
        $recitation->ayahs = $data['ayahs'];
        $recitation->link = $data['link'];

        if (request('audio')) {
            $inputs['audio'] = request('audio')->store('uploads', 'public');
            $recitation->audio = $inputs['audio'];
        }



        $recitation->save();

        // if ($chapter->isDirty('name')) {
        //     session()->flash('chapter-add', 'Chapter added: ' . request('name'));
        // } else {
        //     session()->flash('chapter-add', 'Nothing to add: ' . request('name'));
        // }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recitation  $recitation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recitation $recitation)
    {
        $recitation->delete();
        session()->flash('recitation-deleted', 'Recitation deleted: ' . $recitation->name);
        return back();
    }
}
