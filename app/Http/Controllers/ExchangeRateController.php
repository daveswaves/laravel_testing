<?php

namespace App\Http\Controllers;

use App\Services\CurrencyService;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    // public function __construct(private CurrencyService $currencyService){}
    
    public function index($amount, $from, $to)
    {
        // $return = $this->currencyService->convert($amount, $from, $to);
        $result = (new currencyService())->convert($amount, $from, $to);
        dd($result);
        
        // $products = Products::all();
        // return view('index', compact('products'));
    }
}
