<?php

namespace Database\Factories;

use App\Models\WhitePaper;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhitePaperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WhitePaper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function schema()
    {
        return [
            'title' => $this->faker->word,
        'published' => $this->faker->word,
        'page_text' => $this->faker->text,
        'excerpt' => $this->faker->text,
        'slug' => $this->faker->word,
        'meta_title' => $this->faker->word,
        'meta_description' => $this->faker->word,
        'facebook_title' => $this->faker->word,
        'facebook_desc' => $this->faker->word,
        'twitter_post_title' => $this->faker->word,
        'twitter_post_description' => $this->faker->word,
        'contributor' => $this->faker->word,
        'contributor_link' => $this->faker->word,
        'contributor_2' => $this->faker->word,
        'contributor_2_link' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'author_id' => $this->faker->word,
        'status_id' => $this->faker->word
        ];
    }
}
