<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalcEndpointTest extends TestCase
{
    /**
     * @return void
     */
    public function test_empty_body_validation_response(): void
    {
        $response = $this->followingRedirects()->post('/calc');
        $response->assertSeeText('The first number field is required.');
        $response->assertSeeText('The second number field is required.');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function test_correct_body_validation_response(): void
    {
        $response = $this->followingRedirects()->post('/calc', [
            'first_number' => 3,
            'second_number' => 5
        ]);
        $response->assertSeeText('Result: 8');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function test_incorrect_value_first_input_validation_response(): void
    {
        $response = $this->followingRedirects()->post('/calc', [
            'first_number' => 'test',
            'second_number' => 5
        ]);
        $response->assertSeeText('The first number must be a number');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function test_incorrect_value_second_input_validation_response(): void
    {
        $response = $this->followingRedirects()->post('/calc', [
            'first_number' => 3,
            'second_number' => 'test'
        ]);
        $response->assertSeeText('The second number must be a number');
        $response->assertStatus(200);
    }
}
