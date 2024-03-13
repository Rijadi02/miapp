<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::orderBy('id','desc')->get();
        return view('admin/promotion', compact('promotions'));
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
                'name' => '',
                'image' => 'required',
                'until' => 'required',
                'link' => '',
                'image' => 'required',
                'status' => 'required',
            ]
        );

        $promotion = new \App\Models\Promotion();
        $promotion->name = $data['name'];
        $promotion->until = $data['until'];
        $promotion->link = $data['link'];
        $promotion->status = $data['status'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $promotion->image = $inputs['image'];
        }

        $promotion->save();


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        $promotions = Promotion::all();
        return view('admin/promotion', compact('promotions', 'promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $data = request()->validate(
            [
                'name' => '',
                'image' => '',
                'until' => 'required',
                'link' => 'required',
                'image' => '',
                'status' => 'required'
            ]
        );

        $promotion->name = $data['name'];
        $promotion->until = $data['until'];
        $promotion->link = $data['link'];
        $promotion->status = $data['status'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $promotion->image = $inputs['image'];
        }

        $promotion->update();

        return redirect('/admin/promotions');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        session()->flash('promotion-deleted', 'Promotion deleted: ' . $promotion->name);
        return back();
    }
}
