<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Enduser;
use App\Models\Staff;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'staff_id'          =>  Staff::factory()->create(),
            'particulars'       =>  $this->faker->sentence,
            'reference_number'  =>  $this->faker->isbn13,
            'document_id'       =>  Document::factory()->create(),
            'enduser_id'        =>  Enduser::factory()->create(),
            'completed'         =>  $this->faker->boolean,
            'remarks'           =>  $this->faker->sentence,
            'added_by'          =>  User::factory()->create(),
            'updated_by'        =>  User::factory()->create(),
            'deleted_by'        =>  User::factory()->create(),
        ];
    }
}
