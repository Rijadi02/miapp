<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Resources\BlogResourse;
use App\Http\Resources\PromotionResource;
use App\Http\Resources\VideoResourse;
use App\Models\Ad;
use App\Models\Blog;
use App\Models\Promotion;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'ads' => PromotionResource::collection(Promotion::all()->random(3)),
            'videos' => VideoResourse::collection(Video::latest()->take(5)->get()),
            'bussinesses' => AdResource::collection(Ad::latest()->take(5)->get()),
            'blogs' => BlogResourse::collection(Blog::latest()->take(5)->get()),
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
