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
        $this->post('/api/habits', ['name' => 'Test name']);

        $this->assertCount(1, Habit::all());
    }
}
