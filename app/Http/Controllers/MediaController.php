<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return view('admin/media', compact('medias'));
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

                'facebook' => 'required',
                'instagram' => 'required',
                'youtube' => 'required',
                'telegram' => 'required',
            ]
        );

        $media = new \App\Models\Media();

        $media->telegram = $data['telegram'];
        $media->youtube = $data['youtube'];
        $media->instagram = $data['instagram'];
        $media->facebook = $data['facebook'];


        $media->save();

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
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $medias = Media::all();
        return view('admin.media', compact('medias','media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $data = request()->validate(
            [

                'facebook' => 'required',
                'instagram' => 'required',
                'youtube' => 'required',
                'telegram' => 'required',
            ]
        );


        $media->telegram = $data['telegram'];
        $media->youtube = $data['youtube'];
        $media->instagram = $data['instagram'];
        $media->facebook = $data['facebook'];


        $media->save();

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
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();
        session()->flash('media-deleted', 'Media deleted: ' . $media->facebook);
        return back();
    }
}
