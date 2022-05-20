<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TagFactory extends Factory
{
    //make factory
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->languageCode(),
        ];
    }
}