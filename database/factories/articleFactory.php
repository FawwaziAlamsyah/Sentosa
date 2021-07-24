<?php

namespace Database\Factories;

use App\Models\article;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

class articleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>category::inRandomOrder()->orderby('id')->first(),
            'title'=>$this->faker->title,
            'content'=>$this->faker->paragraph,
        ];
    }
}

