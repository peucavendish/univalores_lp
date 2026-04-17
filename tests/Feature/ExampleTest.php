<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_home_route_is_not_exposed(): void
    {
        $this->get('/')->assertNotFound();
    }

    public function test_the_indica_landing_is_available(): void
    {
        $this->get('/indica')->assertOk();
    }
}
