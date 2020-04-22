<?php

namespace Tests\Feature;

use App\Habit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HabitsTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_habit_can_be_added()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/api/habits', [
            'name' => 'Test name',
            ]);

        $response->assertOk();
        $this->assertCount(1, Habit::all());
    }

    /** @test */
    public function a_name_is_required()
    {
        $response = $this->post('/api/habits', [
            'name' => '',
            ]);

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_habit_can_be_updated()
    {
        $this->withoutExceptionHandling();
        $this->post('/api/habits', [
            'name' => 'Test Habit',
        ]);

        $habit = Habit::first();

        $response = $this->patch('/api/habits/' . $habit->id, [
            'name' => 'New Habit',
        ]);

        $response->assertOk();
        $this->assertEquals('New Habit', Habit::first()->name);
    }
}
