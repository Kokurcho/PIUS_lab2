<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    //make factory
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'code' => $this->faker->currencyCode(),
            'contents' => $this->faker->text(),
            'author' => $this->faker->name()
        ];
    }
}