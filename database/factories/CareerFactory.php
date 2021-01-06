<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function schema()
    {
        return [
            'job_title' => $this->faker->word,
        'open_date' => $this->faker->word,
        'close_date' => $this->faker->word,
        'job_description' => $this->faker->text,
        'about_code_section' => $this->faker->text,
        'published' => $this->faker->word,
        'apply_link' => $this->faker->word,
        'slug' => $this->faker->word,
        'view_count' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'department_id' => $this->faker->word
        ];
    }
}
