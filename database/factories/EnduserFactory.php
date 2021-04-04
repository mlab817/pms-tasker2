<?php

namespace Database\Factories;

use App\Models\Enduser;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnduserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enduser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
