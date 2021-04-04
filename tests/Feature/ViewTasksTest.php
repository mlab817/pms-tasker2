<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTasksTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @group view-tasks
     */
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
        $response->assertSee($tasks[0]->staff->name);
        $response->assertSee($tasks[0]->reference_number);
        $response->assertSee($tasks[0]->document->name);
        $response->assertSee($tasks[0]->enduser->name);
        $response->assertSee($tasks[0]->completed);
        $response->assertSee($tasks[0]->remarks);
        $response->assertSee($tasks[0]->adder->name);
        $response->assertSee($tasks[0]->updater->name);
        $response->assertSee($tasks[0]->deleter->name);
    }
}
