<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\shop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = shop::class;
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address,
            'barang' => $this->faker->name(),
            'total'=>$this->faker->unique()->numerify('#'),
            'harga' =>$this->faker->unique()->numerify('####'),
        ];
    }
}