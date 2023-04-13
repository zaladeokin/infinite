<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $src=['images/product/underwears.png', 'images/product/malefootwear.png', 'images/product/femalefootwears.png', 'images/product/maletop.png'];
        $brand= ['Dolce & Gabana', 'Balanciaga', 'calvin & Kelvin', 'Addidas', 'Loius'];
        return [
            'product_name' => $this->faker->unique()->sentence(1),
            'description' => $this->faker->realText(500),
            'image_path' => $src[rand(0, 3)],
            //'brand' => $this->faker->word(),
            'brand' => $brand[rand(0, 4)],
            'price' => $this->faker->numberBetween($min=100, $max=500),
            'quantity' => $this->faker->numberBetween($min=0, $max=50),
            'age_group' => $this->faker->numberBetween($min=0, $max=1),
            'sex' => $this->faker->numberBetween($min=0, $max=2)
        ];
    }
}
