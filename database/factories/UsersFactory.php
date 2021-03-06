<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function schema()
    {
        return [
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'password' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'verified' => $this->faker->word,
        'verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'verification_token' => $this->faker->word,
        'user_token' => $this->faker->word,
        'access_token' => $this->faker->word,
        'refresh_token' => $this->faker->word,
        'api_token' => $this->faker->word,
        'secret' => $this->faker->word,
        'approved' => $this->faker->word,
        'about' => $this->faker->text,
        'token' => $this->faker->word,
        'activation_key' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'team_id' => $this->faker->word
        ];
    }
}
