<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class predictStockController extends Controller
{
    public function index(Request $request)
    {
        $result = 0;
        return view('predictStock', ['result' => $result]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticker' => ['required', 'string', 'max:10']
        ]);
        $start_date = strtotime(date("Y-m-d"));
        $end_date = strtotime($request->endDate);
        $dateDif = str(($end_date - $start_date) / 60 / 60 / 24);
        $ticker = str($request->ticker);

        $output = exec("python35 predict.py " . $dateDif . ' ' . $ticker);

        $result = round($output, 2);
        return view('predictStock', ['result' => $result]);
    }
}
