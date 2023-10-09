<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\custDeal;
use App\Models\customer;
use App\Models\Deal;
use App\Models\Realty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $Realties = Realty::factory()->count(20)->create();
        $customers = customer::factory()->count(20)->create();
        $Deals = Deal::factory()->count(20)->create();
        $custDeals = custDeal::factory()->count(20)->create();
        
        

        

    }
}
