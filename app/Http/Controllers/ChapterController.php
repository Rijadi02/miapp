<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $chapters = $book->chapters;
        return view('admin.chapter', compact('chapters', 'book'));
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
    public function store(Request $request,$book)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'number' => 'required|unique:chapters',
            ]
        );

        $chapter = new \App\Models\Chapter();
        $slug = Str::slug($data['name'], '-');
        $chapter->slug = $slug;

        $chapter->name = $data['name'];
        $chapter->number = $data['number'];
        $chapter->book_id = $book;



        $chapter->save();

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
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        $chapters = Chapter::all()->where('book_id', '=', $chapter->book_id);
        return view('admin/chapter', compact('chapters', 'chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'number' => 'required',
            ]
        );

        $slug = Str::slug($data['name'], '-');
        $chapter->slug = $slug;

        $chapter->name = $data['name'];
        $chapter->number = $data['number'];
        $chapter->save();

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
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        session()->flash('chapter-deleted', 'Chapter deleted: ' . $chapter->name);
        return back();
    }
}
