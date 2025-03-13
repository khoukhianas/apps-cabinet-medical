<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ChartController extends Controller
{
    public function index()
    {
        $months = range(1, 12);
        $consultationData = Location::select(DB::raw("COUNT(*) as count, MONTH(created_at) as month"))
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->pluck('count', 'month')
            ->toArray();
    
        $consultationCounts = [];
        foreach ($months as $month) {
            $count = isset($consultationData[$month]) ? $consultationData[$month] : 0;
            $consultationCounts[] = $count;
        }
    
        return view('/gerant/chart', compact('consultationCounts'));
    }
    
}


    
