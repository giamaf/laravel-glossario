<?php

namespace Database\Factories;
use App\Models\Tag;
use App\Models\Word;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'term' => fake()->word(),
            'description' => fake()->paragraph(10, true)
        ];
    }

    public function configure() {
        return $this->afterCreating( function ( Word $word)
        {
            $tag_ids= Tag::pluck('id')->toArray();
            $word_tags= array_filter($tag_ids, fn()=>rand(0,1));
            $word->tags()->attach($word_tags);
        });
    }
}
