<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsDashboardController extends Controller
{
    public function index()
    {
        $rooms = [
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4',
                'category' => 'FURNITURE',
                'price' => '$830.21',
                'creator' => 'Ardit Krasniqi'
            ],
            (object)[
                'title' => 'Swiss Chalet',
                'description' => 'Cozy wooden chalet nestled in the Swiss Alps, offering mountain views.',
                'thumbnail' => 'https://images.unsplash.com/photo-1550948390-6eb7fa773072',
                'category' => 'FURNITURE',
                'price' => '$386.01',
                'creator' => 'Bukurije Gashi'
            ],
            (object)[
                'title' => 'Santorini Villa',
                'description' => 'Luxury villa overlooking the Aegean Sea, offering breathtaking sunset views.',
                'thumbnail' => 'https://images.unsplash.com/photo-1532330393533-443990a51d10',
                'category' => 'FURNITURE',
                'price' => '$151.73',
                'creator' => 'Enis Rama'
            ],
            (object)[
                'title' => 'Forest Retreat',
                'description' => 'A peaceful cabin hidden deep in the forest for ultimate relaxation.',
                'thumbnail' => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74',
                'category' => 'FURNITURE',
                'price' => '$333.54',
                'creator' => 'Bekir Halimi'
            ],
            (object)[
                'title' => 'Mountain Lodge',
                'description' => 'High altitude lodge with direct access to hiking trails and ski slopes.',
                'thumbnail' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c',
                'category' => 'FURNITURE',
                'price' => '$184.18',
                'creator' => 'Ahmed Kalaja'
            ],
            (object)[
                'title' => 'Beachside Bungalow',
                'description' => 'Crystal clear water and white sand just steps from your front door.',
                'thumbnail' => 'https://images.unsplash.com/photo-1500990702037-7620ccb6a60a',
                'category' => 'FURNITURE',
                'price' => '$308.78',
                'creator' => 'Fatmir Latifaj'
            ],
        ];
        return view('kids.dashboard', compact('rooms'));
    }
}
