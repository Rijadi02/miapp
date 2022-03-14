<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AdResource;
use App\Http\Resources\BlogResourse;
use App\Http\Resources\BlogsResourse;
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
            'blogs' => BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('caregory',0)->take(5)->get()),
        ];
    }

    public function content(Chapter $chapter)
    {

        $contents = $chapter->contents;
        return $contents;
    }

    public function chapters(Book $book)
    {

        $chapters = $book->chapters;
        return $chapters;
    }

    public function blogs()
    {
        $blogs = BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('caregory',0)->orderBy('updated_at', 'desc')->paginate(5));
        return [
            'random_blogs' => BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('caregory',0)->inRandomOrder()->limit(4)->get()),
            'blogs' => $blogs,
            'pages' => $blogs->lastPage()
        ];
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $blog->counter = $blog->counter + 1;
        $blog->save();
        return [
            'article' => BlogResourse::collection(Blog::where('slug', '=', $slug)->get())[0],
            'random' => BlogsResourse::collection(Blog::whereNotIn('slug', [$blog->slug])->where('tags', 'Aktive')->where('caregory',0)->inRandomOrder()->limit(3)->get()),
        ];
    }

    public function promotions()
    {
        return PromotionResource::collection(Promotion::paginate(5));
    }

    public function videos()
    {
        $videos = VideoResourse::collection(Video::orderBy('updated_at', 'desc')->paginate(5));
        return [
            'random_videos' => VideoResourse::collection(Video::inRandomOrder()->limit(4)->get()),
            'videos' => $videos,
            'pages' => $videos->lastPage()
        ];
    }

    public function mburoja_json()
    {
        return  ChapterResource::collection(Chapter::all());
    }

    public function chapters_search($name)
    {
        $blogs = Chapter::where('name', 'LIKE', '%' . $name . '%')->get();
        return $blogs;
    }

    public function videos_search($title)
    {
        $videos = VideoResourse::collection(Video::where('title', 'LIKE', '%' . $title . '%')->paginate(5));
        return ["videos" => $videos, 'pages' => $videos->lastPage()];
    }


    public function blogs_search($title)
    {
        $blogs = BlogsResourse::collection(Blog::where('title', 'LIKE', '%' . $title . '%')->where('tags', 'Aktive')->where('caregory',0)->orderBy('updated_at', 'desc')->paginate(5));
        return ["blogs" => $blogs, 'pages' => $blogs->lastPage()];
    }
}
