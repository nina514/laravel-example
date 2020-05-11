<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->arr = [1,2,3];
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertHeader('test','test_value');

        $this->assertSame($this->arr, [1, 2,3]);
    }

    public function testAbc()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function getAbc()
    {

    }
}