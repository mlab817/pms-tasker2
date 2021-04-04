<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_tasks()
    {
        $this->withoutExceptionHandling();

        // arrange
        $tasks = Task::factory(5)->create();

        // action
        $response = $this->get('/tasks');

        // assert
        $response->assertStatus(200);
        $response->assertSee($tasks[0]->particulars);
    }
}
