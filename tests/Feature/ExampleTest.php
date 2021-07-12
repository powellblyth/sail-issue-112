<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        User::factory(['email'=>'taylor@laravel.com', 'name'=>'Taylor Otwell'])->create();
        User::factory(['email'=>'dries@laravel.com', 'name'=>'Dries Vints'])->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
