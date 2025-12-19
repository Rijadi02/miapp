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
                'price' => '$830.21'
            ],
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1550948390-6eb7fa773072',
                'category' => 'FURNITURE',
                'price' => '$386.01'
            ],
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1532330393533-443990a51d10',
                'category' => 'FURNITURE',
                'price' => '$151.73'
            ],
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74',
                'category' => 'FURNITURE',
                'price' => '$333.54'
            ],
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c',
                'category' => 'FURNITURE',
                'price' => '$184.18'
            ],
            (object)[
                'title' => 'Ladybug Wheelybug',
                'description' => 'Hat in felted wool with a grosgrain band. Width of brim 4 3/4 in.',
                'thumbnail' => 'https://images.unsplash.com/photo-1500990702037-7620ccb6a60a',
                'category' => 'FURNITURE',
                'price' => '$308.78'
            ],
        ];
        return view('kids.dashboard', compact('rooms'));
    }
}
