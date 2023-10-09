<?php

namespace Database\Factories;

use App\Models\Realty;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\deal>
 */
class dealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'status'=>$this->faker->boolean,
            'cost'=> random_int(1,1000000),
            'realty_id'=>Realty::get()->random()->id
        ];
    }
}
