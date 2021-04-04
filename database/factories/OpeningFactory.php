<?php

namespace Database\Factories;

use App\Models\Enduser;
use App\Models\Opening;
use App\Models\Result;
use App\Models\Staff;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpeningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opening::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_id'           => Task::factory()->create(),
            'particulars'       => $this->faker->sentence,
            'enduser_id'        => Enduser::factory()->create(),
            'reference_number'  => $this->faker->isbn13,
            'rfq_deadline'      => $this->faker->dateTime,
            'opened_at'         => $this->faker->dateTime(),
            'result_id'         => Result::factory()->create(),
            'staff_id'          => Staff::factory()->create(),
            'added_by'          => User::factory()->create(),
            'updated_by'        => User::factory()->create(),
            'deleted_by'        => User::factory()->create(),
        ];
    }
}
