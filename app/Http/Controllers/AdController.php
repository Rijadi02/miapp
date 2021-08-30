<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view('admin/ads', compact('ads'));
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
    public function store(Request $req)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'photo' => 'required',
                'description' => '',
                'link' => '',
                'tags' => '',
                'city' => '',
                'map' => '',
                'facebook' => '',
                'twitter' => '',
                'instagram' => '',
                'gallery' => '',
                'status' => '',
                'contact_details' => '',
            ]
        );

        $ad = new \App\Models\Ad();

        $slug = Str::slug($data['name'], '-');
        $ad->slug = $slug;

        $ad->name = $data['name'];
        $ad->description = $data['description'];
        $ad->tags = $data['tags'];
        $ad->city = $data['city'];
        $ad->map = $data['map'];
        $ad->link = $data['link'];
        $ad->contact_details = $data['contact_details'];



        $facebook = $data['facebook'];
        $twitter = $data['twitter'];
        $instagram = $data['instagram'];

        $media = array("facebook"=>$data['facebook'],"instagram"=>$data['instagram'],"twitter"=>$data['twitter']);

        $ad->media = json_encode($media);

        if (request('photo')) {
            $inputs['photo'] = request('photo')->store('uploads', 'public');
            $ad->photo = $inputs['photo'];
        }


        if ($req->hasfile('gallery')) {
            foreach ($req->file('gallery') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
                // dd($name);
            }
            $ad->gallery = json_encode($imgData);
            // return Redirect::route('cars.damage_hail',array('car' => $car->id));
        }
        $ad->save();



        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/ads');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        $ads = Ad::all();
        return view('admin/ads', compact('ads', 'ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        session()->flash('ad-deleted', 'Ad deleted: ' . $ad->name);
        return back();
    }
}
