<?php

/*
Laravel Test Driven API - https://www.youtube.com/watch?v=k_DE7KG-JhU&list=PLe30vg_FG4OQjsSiCbJhje5jAua12JjTc
https://www.youtube.com/@Bitfumes/videos
 */

namespace App\Services;

use App\Models\ExchangeRate;

class CurrencyService
{
    /*
    const RATES = [
        'usd' => [
            'eur' => 0.94,
            'gbp' => 0.83,
        ],
        'gbp' => [
            'eur' => 1.13,
            'usd' => 1.20,
        ],
    ];
    
    public function convert(float $amount, string $currencyFrom, string $currencyTo): float
    {
        $rate = self::RATES[$currencyFrom][$currencyTo] ?? 0;
        
        return round($amount * $rate, 2);
    }
    */
    
    
    
    public function convert(float $amount, string $currencyFrom, string $currencyTo, bool $test=FALSE): float
    {
        /*
        $rates = $this->excData($test=FALSE);
        
        $rates = [
            'usd' => [
                // 'eur' => 0.91,
                'eur' => 0.94,
                'gbp' => 0.83,
            ],
            'gbp' => [
                'eur' => 1.13,
                'usd' => 1.20,
            ],
        ];
        */
        
        $excRates = ExchangeRate::all();
        
        // dd($excRates);
        
        foreach ($excRates as $rec) {
            $rates[$rec->from][$rec->to] = $rec->amount;
        }
        
        $rate = $rates[$currencyFrom][$currencyTo] ?? 0;
        
        return round($amount * $rate, 2);
    }
    
    private function excData(bool $test=FALSE)
    {
        $rates = [];
        
        if (!$test) {
            $excRates = ExchangeRate::all();
            
            foreach ($excRates as $rec) {
                $rates[$rec->from][$rec->to] = $rec->amount;
            }
        }
        // mock data when testing
        else {
            $rates = [
                'usd' => [
                    'eur' => 0.91,
                    // 'eur' => 0.94,
                    'gbp' => 0.83,
                ],
                'gbp' => [
                    'eur' => 1.13,
                    'usd' => 1.20,
                ],
            ];
        }
        
        return $rates;
    }
    
}