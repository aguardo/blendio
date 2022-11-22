<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class OperationAPITest extends TestCase
{

    /**
     * Test add operations
     *
     * @return void
     */
    public function test_add_API()
    {
        $response = $this->getJSON('/add/5/6');

        $response->assertStatus(200)
         ->assertJson(fn (AssertableJson $json) =>
            $json->where('result', 11)
                 
        );
    }

    /**
     * Test substract operations
     *
     * @return void
     */
    public function test_substract_API()
    {
        $response = $this->getJSON('/substract/5/6');

        $response->assertStatus(200)
         ->assertJson(fn (AssertableJson $json) =>
            $json->where('result', -1)
                 
        );
    }

    /**
     * Test multiply operations
     *
     * @return void
     */
    public function test_multiply_API()
    {
        $response = $this->getJSON('/multiply/5/6');

        $response->assertStatus(200)
         ->assertJson(fn (AssertableJson $json) =>
            $json->where('result', 30)
                 
        );
    }

    /**
     * Test division operations
     *
     * @return void
     */
    public function test_division_API()
    {
        $response = $this->getJSON('/division/5/6');

        $response->assertStatus(200)
         ->assertJson(fn (AssertableJson $json) =>
            $json->where('result', 0)
                 
        );
    }

    /**
     * Test a non-existing operation
     *
     * @return void
     */
    public function test_non_existing_operations_API()
    {
        $response = $this->getJSON('/other/5/6');

        $response->assertStatus(404)
         ->assertJson(fn (AssertableJson $json) =>
            $json->where('error', 'Operation requested does not exist')
                 
        );
    }
}
