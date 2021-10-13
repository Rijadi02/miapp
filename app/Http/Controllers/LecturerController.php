<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::all();

        return view('admin/lecturer', compact('lecturers'));
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
                'name' => 'required',
                'image' => 'required|image',

            ]
        );

        $lecturer = new \App\Models\Lecturer();
        $slug = Str::slug($data['name'], '-');
        $lecturer->slug = $slug;



        $lecturer->name = $data['name'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $lecturer->image = $inputs['image'];

            $file = request('image');
            $file_name =  $inputs['image'];
            $img  = Image::make($file);
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save(\public_path($file_name));
        } else {
            $lecturer->image = 'null';
        }

        $lecturer->save();


        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/lecturers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        $lecturers = Lecturer::all();
        return view('admin/lecturer', compact('lecturers', 'lecturer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'image' => 'image',

            ]
        );

        $lecturer->name = $data['name'];
        $slug = Str::slug($data['name'], '-');
        $lecturer->slug = $slug;

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $lecturer->image = $inputs['image'];

            $file = request('image');
            $file_name =  $inputs['image'];
            $img  = Image::make($file);
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save(\public_path($file_name));
        }
        $lecturer->save();


        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/lecturers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        session()->flash('lecturer-deleted', 'Lecturer deleted: ' . $lecturer->name);
        return back();
    }
}
