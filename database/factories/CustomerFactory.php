<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'user_id' => '1',
            'code' => $this->faker->unique()->bothify('215-######'),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'load_hr' => $this->faker->randomFloat(3, 1, 9999),
            'load_month' => $this->faker->randomFloat(3, 10, 50000),
            'min_load' => $this->faker->randomFloat(3, 1, 1000),
            'pf' => $this->faker->randomFloat(4, 0.70, 1.00),
            'df' => 0.80,
            'run_day' => $this->faker->numberBetween(1, 30),
            'run_hour' => $this->faker->numberBetween(1, 24),
            'sec_cash' => $this->faker->randomFloat(2, 0, 50000),
            'sec_bg' => $this->faker->randomFloat(2, 0, 50000),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'lat' => $this->faker->latitude(23.6, 24.0),
            'lng' => $this->faker->longitude(90.2, 90.6),
            'zone' => $this->faker->numberBetween(1, 10),
        ];
    }
}
