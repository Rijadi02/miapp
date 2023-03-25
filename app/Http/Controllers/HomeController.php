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

        // dd($hour);

        $dayOfWeek = $time->dayOfWeek;


        $reminders = [
            'mengjes' => ['name' => 'Dhikri i mëngjesit', 'link' => '/dhikri-i-mengjesit/duatë'],
            'mbremje' => ['name' => 'Dhikri i mbrëmjes', 'link' => '/dhikri-i-mbremjes/duatë'],
            'zgjohemi' => ['name' => 'Dhikri kur zgjohemi', 'link' => '/kur-zgjohemi/duatë'],
            'fjetjes' => ['name' => 'Dhikri para fjetjes ', 'link' => '/dhikri-kur-biem-ne-gjume/duatë'],
            'kehf' => ['name' => 'Lexo suren El-Kehf', 'link' => 'https://quran.com/18/1-110?translations=88&locale=sq'],
        ];

        $current_date = Time::where('month', $month)->where('day', $day)->first();

        if ($hour > $current_date->imsaku && $hour < $current_date->dhuhr) {
            array_push($buttons, $reminders['mengjes']);
        } else if ($hour > $current_date->asr && $hour < $current_date->isha) {
            array_push($buttons, $reminders['mbremje']);
        }

        if ($hour > $current_date->sunrise && $hour < $current_date->dhuhr) {
            array_push($buttons, $reminders['zgjohemi']);
        }

        if ($dayOfWeek == 5 && $hour > $current_date->fajr && $hour < $current_date->maghrib) {
            array_push($buttons, $reminders['kehf']);
        }

        if ($hour > $current_date->isha && $hour < '23:59') {
            // array_push($buttons,'Surah Mulk');
            // array_push($buttons,'Surah Sajadah');
            array_push($buttons, $reminders['fjetjes']);
        }

        // dd($hour);

        $media = Media::orderBy('id', 'desc')->firstOrFail();
        $posts = Post::all()->random(5);
        $blogs = Blog::where('tags', 'Aktive')->where('category',0)->orderBy('updated_at', 'desc')->take(5)->get();
        return view('home', compact('posts', 'blogs', 'media', 'buttons'));
    }

    public function blogs()
    {
        $blogs = Blog::where('tags', 'Aktive')->where('category',0)->orderBy('updated_at', 'desc')->paginate(9);
        return view('blogs', compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->firstOrFail();
        $blogs = Blog::where('tags', 'Aktive')->where('category',0)->orderBy('updated_at', 'desc')->take(3)->get();
        $blog->counter = $blog->counter + 1;
        $blog->timestamps = false;
        $blog->save();
        $blog->timestamps = true;
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

    public function privacy()
    {
        return view('privacy');
    }

    public function playlists()
    {
        return view('playlists');
    }

    public function ders()
    {
        return redirect("https://planifikuesi.com/derse");
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
        $ad->counter = $ad->counter + 1;
        $ad->save();
        return view('ad', compact('ad', 'facebook', 'instagram', 'twitter'));
    }


    public function lectures($city)
    {

        $time = Carbon::now('GMT+1');
        $dayOfWeek = intval($time->dayOfWeek);

        $days = Day::all();
        $city = City::where('name', '=', $city)->firstOrFail();
        $cities = City::all();

        return view('lectures', compact('days', 'city', 'cities', 'dayOfWeek'));
    }

    public function lecture($id)
    {
        $lecture = Lecture::where('id', '=', $id)->firstOrFail();

        return view('lecture', compact('lecture'));
    }

    public function chapters($slug)
    {
        $book = Book::where('slug', '=', $slug)->firstOrFail();
        $chapters = $book->chapters;
        return view('chapters', compact('chapters', 'book'));
    }

    public function content($slug)
    {
        $chapter = Chapter::where('slug', '=', $slug)->firstOrFail();
        $contents = $chapter->contents()->orderBy('number')->get();
        return view('content', compact('contents', 'chapter'));
    }

    public function recitations()
    {
        $reciters = Reciter::all();
        $recitations = Recitation::inRandomOrder()->limit(10)->get();
        return view('recitations', compact('recitations', 'reciters'));
    }

    public function reciter($slug)
    {
        $reciters = Reciter::all();
        $reciter = Reciter::where('slug', '=', $slug)->firstOrFail();
        $recitations = $reciter->recitations;
        return view('recitations', compact('recitations', 'reciters'));
    }

    public function recitations_show($id)
    {
        $reciters = Reciter::all();
        $recitations = Recitation::where('id', $id)->get();
        return view('recitations', compact('recitations', 'reciters'));
    }

    public function academy()
    {
        return view('academy');
    }

    public function donations()
    {
        return view('donations');
    }

    public function poll(){
        return view('poll');
    }

    public function aplikimi_për_kurse(){
        return view('aplikimi_për_kurse');
    }


    public function times($contry){
        $times = Time::where('country', $contry);

        $janar = Time::where('country', $contry)->where('month', 1)->get();
        $shkurt = Time::where('country', $contry)->where('month', 2)->get();

        $mars = Time::where('country', $contry)->where('month', 3)->get();
        $prill = Time::where('country', $contry)->where('month', 4)->get();
        $maj = Time::where('country', $contry)->where('month', 5)->get();
        $qeshor = Time::where('country', $contry)->where('month', 6)->get();
        $korrik = Time::where('country', $contry)->where('month', 7)->get();
        $gusht = Time::where('country', $contry)->where('month', 8)->get();
        $shtator = Time::where('country', $contry)->where('month', 9)->get();
        $tetor = Time::where('country', $contry)->where('month', 10)->get();
        $nentor = Time::where('country', $contry)->where('month', 11)->get();
        $dhjetor = Time::where('country', $contry)->where('month', 12)->get();


        return view('times', compact('times','janar','shkurt','mars','prill','maj','qeshor','korrik','gusht','shtator','tetor','nentor','dhjetor'));
    }

    public function dhuro(){
        return view('dhuro');
    }

    public function kids(){
        return view('kids');
    }

    public function sinqeriteti(){
        return view('sinqeriteti');
    }

}
