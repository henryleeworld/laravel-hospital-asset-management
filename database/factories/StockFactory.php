<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Stock;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'current_stock' => 0,
            'asset_id'    => Asset::inRandomOrder()->first()->id,
            'hospital_id' => Hospital::inRandomOrder()->first()->id,
        ];
    }
}
