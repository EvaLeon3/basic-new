<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $modal =Post::class;
    public function definition()
    {
       // $factory->define(Posts::class, function(Faker $faker))
            return[
                'user_id' => 1, 
                'title' => $this->faker->sentence,
                'body' => $this->faker->text(800),
            ];
         }
}
   


