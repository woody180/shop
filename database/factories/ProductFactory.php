<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name();
        $url = Str::slug($title);
        
        return [
            'title' => $title,
            'url' => $url,
            'image' => 'https://loremflickr.com/600/500/fruits/?lock=30'.random_int(10, 100),
            'price' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5)
        ];
    }
}
