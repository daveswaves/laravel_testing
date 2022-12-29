<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExchangeRate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ExchangeRate::create([
            'id'     => 1,
            'from'   => 'usd',
            'to'     => 'eur',
            'amount' => 0.94,
        ]);
        ExchangeRate::create([
            'id'     => 2,
            'from'   => 'usd',
            'to'     => 'gbp',
            'amount' => 0.83,
        ]);
        ExchangeRate::create([
            'id'     => 3,
            'from'   => 'gbp',
            'to'     => 'usd',
            'amount' => 1.20,
        ]);
        ExchangeRate::create([
            'id'     => 4,
            'from'   => 'gbp',
            'to'     => 'eur',
            'amount' => 1.13,
        ]);
        
        
        /*
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
