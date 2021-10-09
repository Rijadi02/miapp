<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Chapter $chapter)
    {
        $contents = $chapter->contents;
        return view('admin.content', compact('contents', 'chapter'));
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
    public function store(Request $request,  $chapter)
    {
        $data = request()->validate(
            [
                'title' => '',
                'number' => 'required',
                'content' => 'required',
                'transliteration' => '',
                'arabic' => '',
                'reference' => '',
                'hadith' => '',
            ]
        );

        $content = new \App\Models\Content();


        $content->title = $data['title'];
        $content->number = $data['number'];
        $content->content = $data['content'];
        $content->transliteration = $data['transliteration'];
        $content->hadith = $data['hadith'];
        $content->reference = $data['reference'];
        $content->arabic = $data['arabic'];
        $content->chapter_id = $chapter;

        $content->save();

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
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $contents = Content::all()->where('chapter_id', '=', $content->chapter_id);

        return view('admin.content', compact('contents', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'number' => 'required',
                'content' => 'required',
                'transliteration' => '',
                'arabic' => '',
                'reference' => '',
                'hadith' => '',
            ]
        );


        $content->title = $data['title'];
        $content->number = $data['number'];
        $content->content = $data['content'];
        $content->transliteration = $data['transliteration'];
        $content->hadith = $data['hadith'];
        $content->reference = $data['reference'];
        $content->arabic = $data['arabic'];

        $content->save();

        // if ($content->isDirty('title')) {
        //     session()->flash('content-add', 'Content added: ' . request('title'));
        // } else {
        //     session()->flash('title-add', 'Nothing to add: ' . request('title'));
        // }
        $chapter_id = $content->chapter_id;
        return redirect('/admin/chapter/'.$chapter_id.'/contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
        session()->flash('content-deleted', 'Content deleted: ' . $content->title);
        return back();
    }
}
