<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class predictInvestmentController extends Controller
{
    public function index(Request $request)
    {
        $num = 0;
        $endDate = '';
        $ticker = '';
        return view('predictInvestment', ['num' => $num, 'date' => $endDate, 'stock' => $ticker]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticker' => ['required', 'string', 'max:10'],
            'investment' => ['required', 'integer'],
        ]);
        $endDate = $request->endDate;
        $ticker = $request->ticker;

        $start_date = strtotime(date("Y-m-d"));
        $end_date = strtotime($request->endDate);
        $dateDif = str(($end_date - $start_date) / 60 / 60 / 24);
        $ticker = str($request->ticker);

        $finalPrice = exec("python35 predict.py " . $dateDif . ' ' . $ticker);


        $initial_investment = $request->investment;
        $currentPrice = exec("python35 currentPrice.py " . $dateDif . ' ' . $ticker);


        $result = ($initial_investment / $currentPrice) * $finalPrice;

        $result = round($result, 2);
        return view('predictInvestment', ['current' => round($currentPrice, 2), 'predict' => round($finalPrice, 2), 'num' => $result, 'date' => $endDate, 'stock' => $ticker]);
    }
}
