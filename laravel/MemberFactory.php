<?php

//放於laravel的database\factories\MemberFactory.php
//要先建立Member的Models

namespace Database\Factories;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'm_name' => $this->faker->name(),
            'm_username' => $this->faker->name(),
            'm_name' => $this->faker->numberBetween(1, 10),
            'm_username' => $this->faker->randomElement([true, false]),
            'm_passwd' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'm_sex' => $this->faker->randomElement(['男', '女']),
            'm_birthday' => Carbon::now()->addDays(rand(-200, -900)),
            'm_level' => $this->faker->randomElement(['admin', 'member']),
            'm_email' => $this->faker->email(),
            'm_url' => $this->faker->url(),
            'm_phone' => $this->faker->phoneNumber(),
            'm_address' => $this->faker->address(),
            'm_login' => rand(1, 20),
            'm_logintime' => Carbon::createFromFormat('Y-m-d', $this->faker->date),
            'm_jointime' => Carbon::createFromFormat('Y-m-d', $this->faker->date),
        ];
    }
}
