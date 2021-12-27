<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Resources\BlogResourse;
use App\Http\Resources\ChapterResource;
use App\Http\Resources\PromotionResource;
use App\Http\Resources\VideoResourse;
use App\Models\Ad;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Promotion;
use App\Models\Video;
use App\Models\Chapter;

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

    public function content(Chapter $chapter){

        $contents = $chapter->contents;
        return $contents;
    }

    public function chapters(Book $book){

        $chapters = $book->chapters;
        return $chapters;
    }

    public function blogs(){
        return BlogResourse::collection(Blog::paginate(5));
    }

    public function promotions(){
        return PromotionResource::collection(Promotion::paginate(5));
    }

    public function videos(){
        return VideoResourse::collection(Video::paginate(5));
    }

    public function mburoja_json()
    {
        return  ChapterResource::collection(Chapter::all());
    }
}
