<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $collections = Chair::all();
        $split = $collections->split(2);
        $coord = $split->all();

        return view('dashboard', [
            'coords'   => $coord,
            'x' => request()->get('x'),
            'y' => request()->get('y'),
        ]);
    }

    public function findChair(Request $request)
    {
        $response = Chair::where('rssi_1', $request->rssi_1)
            ->where('rssi_2', $request->rssi_2)
            ->where('rssi_3', $request->rssi_3)
            ->where('status', '1')
            ->first();

        if(blank($response)) {
            return redirect('/dashboard')->withErrors(['error' => 'Gagal! titik koordinat tidak ditemukan']);
        }

        return redirect('/dashboard?x=' . $response->x.'&y='.$response->y);
    }
}
