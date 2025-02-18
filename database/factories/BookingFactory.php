<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\ShippingMethod;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'booking_code' => $this->faker->word(),
            'customer_id' => Customer::factory(),
            'shipping_method_id' => ShippingMethod::factory(),
            'status' => $this->faker->randomElement(["pending",""]),
        ];
    }
}
