<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Product::class;
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),

            'price'=> $this->faker->numberBetween($min=1000,$max=20000),

            'detail'=> $this->faker->text($maxNbChars = 200),

        ];
    }
}
