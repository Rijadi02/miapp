<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.video', compact('videos'));
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
                'title' => 'required',
                'link' => 'required',
                'date' => '',
                'thumbnail' => 'required',
            ]
        );

        $video = new \App\Models\Video();


        $video->title = $data['title'];
        $video->link = $data['link'];
        if (request('thumbnail')) {
            $inputs['thumbnail'] = request('thumbnail')->store('uploads', 'public');
            $video->thumbnail = $inputs['thumbnail'];
        }
        $video->date = $data['date'];

        $video->save();

        // if ($content->isDirty('title')) {
        //     session()->flash('content-add', 'Content added: ' . request('title'));
        // } else {
        //     session()->flash('title-add', 'Nothing to add: ' . request('title'));
        // }

        return back();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $videos = Video::all();
        return view('admin/video', compact('videos', 'video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'link' => 'required',
                'date' => '',
                'thumbnail' => '',
            ]
        );

        $video->title = $data['title'];
        $video->link = $data['link'];
        if (request('thumbnail')) {
            $inputs['thumbnail'] = request('thumbnail')->store('uploads', 'public');
            $video->thumbnail = $inputs['thumbnail'];
        }
        $video->date = $data['date'];

        $video->save();

        // if ($content->isDirty('title')) {
        //     session()->flash('content-add', 'Content added: ' . request('title'));
        // } else {
        //     session()->flash('title-add', 'Nothing to add: ' . request('title'));
        // }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('video-deleted', 'Video deleted: ' . $video->name);
        return back();
    }

    public function notifications_view()
    {
        return view('admin.notification');
    }

    public function notification(Request $request){

        $data = [
            'title' => $request->title,
            'body' => $request->body,
            "data" => ["url" => $request->url]
        ];
        // Helper::sendNotification($data);
    }
}
