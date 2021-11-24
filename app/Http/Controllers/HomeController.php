<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\City;
use App\Models\Day;
use App\Models\Lecture;
use App\Models\Media;
use App\Models\Post;
use App\Models\Recitation;
use App\Models\Reciter;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buttons = [];

        $time = Carbon::now('GMT+1');

        $month = $time->month;
        $day = $time->day;
        $hour = $time->format('H:i:s');
        
        $dayOfWeek = $time->dayOfWeek;


        $reminders = [
            'mengjes' => ['name' => 'Dhikri i mengjesit', 'link' => '/kur-zgjohemi/duat%C3%AB'],
            'mbremje' => ['name' => 'Dhikri i mbremjes', 'link' => '/kur-zgjohemi/duat%C3%AB'],
            'zgjohemi' => ['name' => 'Kur zgjohemi', 'link' => '/kur-zgjohemi/duat%C3%AB'],
            'fjetjes' => ['name' => 'Dhikri i fjetjes', 'link' => '/kur-zgjohemi/duat%C3%AB'],
            'kehf' => ['name' => 'Surah Kehf', 'link' => '/kur-zgjohemi/duat%C3%AB'],
        ];

        $current_date = Time::where('month', $month)->where('day', $day)->first();

        if ($hour > $current_date->imsaku && $hour < $current_date->dhuhr) {
            array_push($buttons, $reminders['mengjes']);
        } else if ($hour > $current_date->asr && $hour < '23:59') {
            array_push($buttons, $reminders['mbremje']);
        }

        if ($hour > $current_date->sunrise && $hour < $current_date->dhuhr) {
            array_push($buttons, $reminders['zgjohemi']);
        }

        if ($dayOfWeek == 5 && $hour > $current_date->sunrise && $hour < $current_date->maghrib) {
            array_push($buttons, $reminders['kehf']);
        }

        if ($hour > $current_date->maghrib && $hour < '23:59') {
            // array_push($buttons,'Surah Mulk');
            // array_push($buttons,'Surah Sajadah');
            array_push($buttons, $reminders['fjetjes']);
        }

        // dd($hour);

        $media = Media::orderBy('id', 'desc')->firstOrFail();
        $posts = Post::orderBy('id', 'desc')->take(5)->get();
        $blogs = Blog::orderBy('id', 'desc')->take(5)->get();
        return view('home', compact('posts', 'blogs', 'media', 'buttons'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('blogs', compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $blogs = Blog::latest()->take(3)->get();
        return view('blog', compact('blog', 'blogs'));
    }

    // public function shield2()
    // {
    //     $category = Category::where('slug', '=', 'mburoja-e-muslimanit')->firstOrFail();
    //     $books = $category->books;
    //     return view('shield', compact('books') );
    // }

    public function shield()
    {
        return view('shield');
    }

    public function ads(Request $request)
    {
        $tag = $request->input('tag');
        $city = $request->input('city');
        $ads = Ad::query()->where('status', '=', 1);
        if (isset($tag)) {
            $ads = $ads->where('tags', 'LIKE', "%{$tag}%");
        }

        if (isset($city)) {
            $ads = $ads->where('city', 'LIKE', "%{$city}%");
        }

        $ads = $ads->paginate(5);
        return view('ads', compact('ads'));
    }

    public function ad($slug)
    {
        $ad = Ad::where('slug', '=', $slug)->firstOrFail();
        $medias = json_decode($ad->media, true);
        $facebook = $medias['facebook'];
        $twitter = $medias['twitter'];
        $instagram = $medias['instagram'];

        return view('ad', compact('ad', 'facebook', 'instagram', 'twitter'));
    }


    public function lectures($city)
    {


        $days = Day::all();
        $city = City::where('name', '=', $city)->firstOrFail();
        $cities = City::all();
        return view('lectures', compact('days', 'city', 'cities'));
    }

    public function lecture($id)
    {
        $lecture = Lecture::where('id', '=', $id)->firstOrFail();

        return view('lecture', compact('lecture') );
    }

    public function chapters($slug)
    {
        $book = Book::where('slug', '=', $slug)->firstOrFail();
        $chapters = $book->chapters;
        return view('chapters', compact('chapters','book'));
    }

    public function content($slug)
    {
        $chapter = Chapter::where('slug', '=', $slug)->firstOrFail();
        $contents = $chapter->contents;
        return view('content', compact('contents','chapter'));
    }

    public function recitations()
    {
        $reciters = Reciter::all();
        $recitations = Recitation::inRandomOrder()->limit(10)->get();
        return view('recitations', compact('recitations','reciters'));
    }

    public function reciter($slug)
    {
        $reciters = Reciter::all();
        $reciter = Reciter::where('slug', '=', $slug)->firstOrFail();
        $recitations = $reciter->recitations;
        return view('recitations', compact('recitations','reciters'));
    }

    public function recitations_show($id)
    {
        $reciters = Reciter::all();
        $recitations = Recitation::where('id', $id)->get();
        return view('recitations', compact('recitations','reciters'));
    }
}
