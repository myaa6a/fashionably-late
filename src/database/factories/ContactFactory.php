<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{

    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement($array=['男性','女性', 'その他']),
            'email' => $this->faker->email,
            'tell' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'detail' => $this->faker->realText,
        ];
    }
}