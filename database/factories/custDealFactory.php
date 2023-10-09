<?php

namespace Database\Factories;

use App\Models\customer;
use App\Models\Deal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\custDeal>
 */
class custDealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id'=>customer::get()->random()->id,
            'deal_id'=>Deal::get()->random()->id
        ];
    }
}
