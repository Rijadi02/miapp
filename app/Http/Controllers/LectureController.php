<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Day;
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
        $days = Day::all();
        $cities = City::all();
        $lectures = $lecturer->lectures;
        return view('admin.lecture', compact('lectures', 'lecturer','days','cities'));
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
                'day_id' => 'required',
                'city_id' => 'required',
                'allowance' => 'required',
                'time' => 'required',
                'map' => '',
                'place' => 'required',
                'link' => '',
                'status' => 'required'
            ]
        );

        $lecture = new \App\Models\Lecture();
        $lecture->date = $data['date'];
        $lecture->title = $data['title'];
        $lecture->day_id = $data['day_id'];
        $lecture->city_id = $data['city_id'];
        $lecture->time = $data['time'];
        $lecture->allowance = $data['allowance'];
        $lecture->map = $data['map'];
        $lecture->link = $data['link'];
        $lecture->status = $data['status'];
        $lecture->place = $data['place'];
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
        $days = Day::all();
        $cities = City::all();
        $lectures = Lecture::all()->where('lecturer_id', '=', $lecture->lecturer_id);
        return view('admin.lecture', compact('lectures', 'lecture','days','cities'));
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
                'day_id' => 'required',
                'city_id' => 'required',
                'allowance' => 'required',
                'time' => 'required',
                'map' => '',
                'link' => '',
                'place' => 'required',
                'status' => 'required'
            ]
        );

        $lecture->title = $data['title'];
        $lecture->date = $data['date'];
        $lecture->day_id = $data['day_id'];
        $lecture->city_id = $data['city_id'];
        $lecture->time = $data['time'];
        $lecture->map = $data['map'];
        $lecture->allowance = $data['allowance'];
        $lecture->link = $data['link'];
        $lecture->status = $data['status'];
        $lecture->place = $data['place'];


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
