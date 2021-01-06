<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function schema()
    {
        return [
            'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'approved' => $this->faker->word,
        'company' => $this->faker->word,
        'title' => $this->faker->word,
        'phone' => $this->faker->word,
        'city' => $this->faker->word,
        'state_region' => $this->faker->word,
        'country' => $this->faker->word,
        'current_customer_partner' => $this->faker->word,
        'cortexdecoder' => $this->faker->word,
        'epic_id_number' => $this->faker->word,
        'already_talked_to_rep' => $this->faker->word,
        'are_you_a_student' => $this->faker->word,
        'are_you_a_vendor' => $this->faker->word,
        'accept_terms' => $this->faker->word,
        'referral' => $this->faker->word,
        'lead_source' => $this->faker->word,
        'product_interest' => $this->faker->word,
        'license_key' => $this->faker->word,
        'w_2_lcc' => $this->faker->word,
        'agent_1' => $this->faker->word,
        'agent_2' => $this->faker->word,
        'salesforce' => $this->faker->word,
        'salesrep_email' => $this->faker->word,
        'description' => $this->faker->word,
        'last_login' => $this->faker->date('Y-m-d H:i:s'),
        'contract_agreed' => $this->faker->word,
        'contract_agreed_date' => $this->faker->word,
        'contract_form_sent' => $this->faker->word,
        'consulted' => $this->faker->word,
        'display_name' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'team_id' => $this->faker->word,
        'sales_rep_id' => $this->faker->word,
        'industy_id' => $this->faker->word,
        'user_id' => $this->faker->word
        ];
    }
}
