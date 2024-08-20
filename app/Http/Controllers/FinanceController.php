<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Http\Requests\StoreFinanceRequest;
use App\Http\Requests\UpdateFinanceRequest;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(){

        $finances = Finance::all();
        return view('admin.finance', compact('finances'));
    }

    public function store(Request $request){

            $validated = $request->validate([
                'name' => 'required',
                'giver' => 'nullable',
                'sum' => 'required|numeric',
                'type' => 'required',
                'project' => 'required',
                'description' => 'nullable'
            ]);

            Finance::create($validated);
            return redirect()->route('finance.index');

    }

    public function sum(){
        $names = ['Rijadi', 'Graniti', 'Ardi', 'Albani', 'Eralbi'];

        $results = [];

        foreach ($names as $name) {
            $totalDalje = Finance::where('name', $name)
                                ->where('type', 'dalje')
                                ->sum('sum');

            $totalHyrje = Finance::where('name', $name)
                                ->where('type', 'hyrje')
                                ->sum('sum');

            $difference = $totalHyrje - $totalDalje;

            $results[] = [
                'name' => $name,
                'totalDalje' => $totalDalje,
                'totalHyrje' => $totalHyrje,
                'difference' => $difference
            ];
        }

        $totalHyrje = Finance::where('type', 'hyrje')
        ->sum('sum');

        $totalDalje = Finance::where('type', 'dalje')
        ->sum('sum');

        $difference = $totalHyrje - $totalDalje;

        return view('admin.sum', compact('results', 'totalHyrje', 'totalDalje', 'difference'));

    }
}
