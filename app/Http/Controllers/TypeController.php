<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('admin/type', compact('types'));
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
                'name' => 'required|unique:types',
                'icon' => '',
            ]
        );

        $type = new \App\Models\Type();
        $slug = Str::slug($data['name'], '-');
        $type->slug = $slug;
        $type->name = $data['name'];

        if (request('icon')) {
            $inputs['icon'] = request('icon')->store('uploads', 'public');
            $type->icon = $inputs['icon'];
        } else {
            $type->icon = 'null';
        }

        $type->save();


        return redirect('/admin/types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $types = Type::all();
        return view('admin/type', compact('types', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'icon' => '',
            ]
        );

        $slug = Str::slug($data['name'], '-');
        $type->slug = $slug;
        $type->name = $data['name'];

        if (request('icon')) {
            $inputs['icon'] = request('icon')->store('uploads', 'public');
            $type->icon = $inputs['icon'];
        } else {
            $type->icon = 'null';
        }

        $type->save();


        return redirect('/admin/types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        session()->flash('type-deleted', 'Type deleted: ' . $type->name);
        return back();
    }
}
