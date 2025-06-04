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
use App\Models\Token;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random_videos = VideoResourse::collection(Video::all()->random(4));
        $last_video = VideoResourse::collection(Video::latest()->limit(1)->get());
        $videos = $last_video->merge($random_videos);


// Get the 3 most recent blog posts
        $latestBlogs = Blog::where('tags', 'Aktive')
            ->where('category', 0)
            ->orderBy('updated_at', 'desc')
            ->limit(3)
            ->get();

        // Get 4 random blogs excluding the most recent ones
        $otherBlogs = Blog::where('tags', 'Aktive')
            ->where('category', 0)
            ->whereNotIn('id', $latestBlogs->pluck('id'))
            ->inRandomOrder()
            ->limit(2)
            ->get();

        // Merge the latest blogs at the beginning
        $blogsCollection = $latestBlogs->merge($otherBlogs);

        // Wrap the collection with your blogs resource
        $blogs = BlogsResourse::collection($blogsCollection);

        $currentDateTime = DB::raw('NOW()');
        $promotion = Promotion::whereDate('until', '>=', $currentDateTime)->inRandomOrder()->first();
        // $blogs->prepend(new BlogsResourse(Blog::findorfail(95)));
        return [
            'videos' => $videos,
            'bussinesses' => AdResource::collection(Ad::latest()->take(5)->get()),
            'blogs' =>  $blogs,
            'ad' => $promotion,
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
        $blogs = BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('category',0)->orderBy('updated_at', 'desc')->paginate(5));
        return [
            'random_blogs' => BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('category',0)->inRandomOrder()->limit(4)->get()),
            'blogs' => $blogs,
            'pages' => $blogs->lastPage()
        ];
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $blog->counter = $blog->counter + 1;
        $blog->timestamps = false;
        $blog->save();
        return [
            'article' => BlogResourse::collection(Blog::where('slug', '=', $slug)->get())[0],
            'random' => BlogsResourse::collection(Blog::whereNotIn('slug', [$blog->slug])->where('tags', 'Aktive')->where('category',0)->inRandomOrder()->limit(3)->get()),
        ];
    }

    public function promotions()
    {
        $currentDateTime = DB::raw('NOW()');
        $promotions = Promotion::whereDate('until', '>=', $currentDateTime)->get();
        return PromotionResource::collection($promotions);
    }

    public function videos()
    {
        $videos = VideoResourse::collection(Video::orderBy('created_at', 'desc')->paginate(5));
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
        $blogs = BlogsResourse::collection(Blog::where('title', 'LIKE', '%' . $title . '%')->where('tags', 'Aktive')->where('category',0)->orderBy('updated_at', 'desc')->paginate(5));
        return ["blogs" => $blogs, 'pages' => $blogs->lastPage()];
    }

    public function natures()
    {
        $blogs = BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('category',1)->orderBy('updated_at', 'desc')->paginate(5));
        return [
            'random_blogs' => BlogsResourse::collection(Blog::where('tags', 'Aktive')->where('category',1)->inRandomOrder()->limit(4)->get()),
            'blogs' => $blogs,
            'pages' => $blogs->lastPage()
        ];
    }

    public function nature($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $blog->counter = $blog->counter + 1;
        $blog->timestamps = false;
        $blog->save();
        return [
            'article' => BlogResourse::collection(Blog::where('slug', '=', $slug)->get())[0],
            'random' => BlogsResourse::collection(Blog::whereNotIn('slug', [$blog->slug])->where('tags', 'Aktive')->where('category',1)->inRandomOrder()->limit(3)->get()),
        ];
    }

    public function nature_search($title)
    {
        $blogs = BlogsResourse::collection(Blog::where('title', 'LIKE', '%' . $title . '%')->where('tags', 'Aktive')->where('category' , 1)->orderBy('updated_at', 'desc')->paginate(5));
        return ["blogs" => $blogs, 'pages' => $blogs->lastPage()];
    }


    public function tokens()
    {
        $tokens = Token::count();
        return $tokens - 180;
    }

    public function ads(){
        $ads = AdResource::collection(Ad::all());
        return $ads;
    }

    public function article_views(){

        $blogs = Blog::where('id', '>' , 0)->sum('counter');

        $shtadhetshi = (70 / 100) * $blogs;

        $mbetja = $shtadhetshi/2;

        $blogs = $blogs - $mbetja;

        return $blogs;
    }

}

