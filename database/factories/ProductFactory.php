<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function schema()
    {
        return [
            'name' => $this->faker->word,
        'description' => $this->faker->text,
        'short' => $this->faker->text,
        'demo_request_link' => $this->faker->word,
        'demo_form' => $this->faker->word,
        'slug' => $this->faker->word,
        'type' => $this->faker->word,
        'chicklet' => $this->faker->word,
        'published' => $this->faker->word,
        'meta_title' => $this->faker->word,
        'meta_description' => $this->faker->text,
        'facebook_title' => $this->faker->word,
        'facebook_desc' => $this->faker->text,
        'twitter_post_title' => $this->faker->word,
        'twitter_post_description' => $this->faker->text,
        'notes_section' => $this->faker->text,
        'mpn' => $this->faker->word,
        'sku' => $this->faker->word,
        'demo_button_text' => $this->faker->word,
        'cta_button_text' => $this->faker->word,
        'cta_url' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'status_id' => $this->faker->word
        ];
    }
}
