<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class ApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/api/employees');
        $response->assertStatus(200);
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCreateRecord()
    {
        $response = $this->postJson('/api/employees', ['title' => 'Sr. Manager', 'description' =>"top guy in charge"]);
        $response
            ->assertStatus(200)
            ->assertJson(["message"=> "Great success! New task created",]);
    }
}
