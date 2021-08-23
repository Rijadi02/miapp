<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Lecturer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Lecturer $lecturer)
    {
        $lectures = $lecturer->lectures;
        return view('admin.lecture', compact('lectures', 'lecturer'));
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
    public function store(Request $request,$lecturer)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'date' => '',
                'day' => 'required',
                'time' => 'required',
                'map' => '',
                'link' => '',
                'status' => 'required'
            ]
        );

        $lecture = new \App\Models\Lecture();
        $lecture->date = Carbon::parse($data['date'])->format('Y-m-d');
        $lecture->title = $data['title'];
        $lecture->day = $data['day'];
        $lecture->time = $data['time'];
        $lecture->map = $data['map'];
        $lecture->link = $data['link'];
        $lecture->status = $data['status'];
        $lecture->lecturer_id = $lecturer;

        $lecture->save();

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
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        $lectures = Lecture::all()->where('lecturer_id', '=', $lecture->lecturer_id);
        return view('admin/lecture', compact('lectures', 'lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'date' => '',
                'day' => 'required',
                'time' => 'required',
                'map' => '',
                'link' => '',
                'status' => 'required'
            ]
        );

        $lecture->title = $data['title'];
        $lecture->date = $data['date'];
        $lecture->day = $data['day'];
        $lecture->time = $data['time'];
        $lecture->map = $data['map'];
        $lecture->link = $data['link'];
        $lecture->status = $data['status'];


        $lecture->save();

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
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
        session()->flash('lecture-deleted', 'Lecture deleted: ' . $lecture->name);
        return back();
    }
}
