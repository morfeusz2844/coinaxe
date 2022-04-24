<?php

namespace Tests\Feature;

use Tests\TestCase;

class TextEndpointTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_success(): void
    {
        $response = $this->followingRedirects()->post('/text', [
            'text-area' => 'testing value'
        ]);
        $response->assertStatus(200);
    }
}
