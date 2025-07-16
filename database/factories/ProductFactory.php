<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => $this->faker->word(),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'stock'       => rand(1, 100),
            'price'       => rand(500, 5000),
            'status'      => '1',
        ];
    }

    /**
     * Configure the factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function ($product) {
            Transaction::create([
                'product_id' => $product->id,
                'quantity'   => rand(1,10),
                'type'       => ['in', 'out'][rand(0,1)],
            ]);
        });
    }
}
