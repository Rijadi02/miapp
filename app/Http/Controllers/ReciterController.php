<?php

namespace App\Http\Controllers;

use App\Models\Reciter;
use Illuminate\Http\Request;

class ReciterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reciters = Reciter::all();
        return view('admin/reciter', compact('reciters'));
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

        $reciter = new \App\Models\Reciter();


        $reciter->name = $data['name'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $reciter->image = $inputs['image'];
        } else {
            $reciter->image = 'null';
        }

        $reciter->save();


        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/reciters');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reciter  $reciter
     * @return \Illuminate\Http\Response
     */
    public function show(Reciter $reciter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reciter  $reciter
     * @return \Illuminate\Http\Response
     */
    public function edit(Reciter $reciter)
    {
        $reciters = Reciter::all();
        return view('admin/reciter', compact('reciters', 'reciter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reciter  $reciter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reciter $reciter)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'image' => 'image',

            ]
        );


        $reciter->name = $data['name'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $reciter->image = $inputs['image'];
        }

        $reciter->save();


        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/reciters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reciter  $reciter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reciter $reciter)
    {
        $reciter->delete();
        session()->flash('reciter-deleted', 'Reciter deleted: ' . $reciter->name);
        return back();
    }
}
