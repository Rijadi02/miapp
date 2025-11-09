<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Question;
use App\Models\Notification;
use App\Models\Promotion;
use App\Models\Recitation;
use App\Models\Content;
use App\Models\Media;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogsCount = Blog::count();
        $totalBlogViews = Blog::sum('counter');

        $stats = [
            'blogs_count' => $blogsCount,
            'total_blog_views' => $totalBlogViews,
            'average_views_per_blog' => $blogsCount > 0 ? round($totalBlogViews / $blogsCount) : 0,
            'questions_count' => Question::count(),
            'notifications_count' => Notification::count(),
            'promotions_count' => Promotion::count(),
            'recitations_count' => Recitation::count(),
            'contents_count' => Content::count(),
        ];

        // Get last 10 media entries for chart
        $mediaData = Media::orderBy('created_at', 'desc')->take(10)->get()->reverse();

        $chartData = [
            'labels' => [],
            'instagram' => [],
            'youtube' => [],
            'telegram' => [],
            'facebook' => [],
        ];

        foreach ($mediaData as $media) {
            $chartData['labels'][] = $media->created_at->format('d/m');
            $chartData['instagram'][] = $media->instagram;
            $chartData['youtube'][] = $media->youtube;
            $chartData['telegram'][] = $media->telegram;
            $chartData['facebook'][] = $media->facebook;
        }

        $latestMedia = Media::orderBy('created_at', 'desc')->first();

        $previousMedia = Media::orderBy('created_at', 'desc')->skip(1)->first();

        $growthRates = null;
        if ($latestMedia && $previousMedia) {
            $growthRates = [
                'instagram' => $previousMedia->instagram > 0 ? round((($latestMedia->instagram - $previousMedia->instagram) / $previousMedia->instagram) * 100, 2) : 0,
                'youtube' => $previousMedia->youtube > 0 ? round((($latestMedia->youtube - $previousMedia->youtube) / $previousMedia->youtube) * 100, 2) : 0,
                'telegram' => $previousMedia->telegram > 0 ? round((($latestMedia->telegram - $previousMedia->telegram) / $previousMedia->telegram) * 100, 2) : 0,
                'facebook' => $previousMedia->facebook > 0 ? round((($latestMedia->facebook - $previousMedia->facebook) / $previousMedia->facebook) * 100, 2) : 0,
            ];
        }

        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        $recentQuestions = Question::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'chartData', 'latestMedia', 'growthRates', 'recentBlogs', 'recentQuestions'));
    }
}
