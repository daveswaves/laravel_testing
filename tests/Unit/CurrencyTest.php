<?php

namespace Tests\Unit;

use App\Services\CurrencyService;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    public function test_convert_usd_to_eur_successful()
    {
        $result = (new currencyService())->convert(100, 'usd', 'eur', True); // don't use database
        $this->assertEquals(94, $result);
    }
    
    public function test_convert_usd_to_gbp_successful()
    {
        $result = (new currencyService())->convert(100, 'usd', 'gbp');
        $this->assertEquals(83, $result);
    }
    
    public function test_convert_gbp_to_usd_successful()
    {
        $result = (new currencyService())->convert(100, 'gbp', 'usd');
        $this->assertEquals(120, $result);
    }
    
    public function test_convert_gbp_to_eur_successful()
    {
        $result = (new currencyService())->convert(100, 'gbp', 'eur');
        $this->assertEquals(113, $result);
    }
}
