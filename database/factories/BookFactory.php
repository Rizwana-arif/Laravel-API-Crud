<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
      
     * @return array<string, mixed>
     */
  protected  $model = \App\Models\Book::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'isbn' => $this->faker->unique()->isbn10(),
            'published_date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
