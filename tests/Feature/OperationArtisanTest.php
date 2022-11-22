<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class OperationArtisanTest extends TestCase
{
    /**
     * Test add operations
     *
     * @return void
     */
    public function test_add_artisan()
    {

        $this->artisan('operations 5 6 add')
         ->expectsOutput('11');
    }

    /**
     * Test substract operations
     *
     * @return void
     */
    public function test_substract_artisan()
    {

        $this->artisan('operations 5 6 substract')
         ->expectsOutput('-1');
    }

    /**
     * Test multiply operations
     *
     * @return void
     */
    public function test_multiply_artisan()
    {

        $this->artisan('operations 5 6 multiply')
         ->expectsOutput('30');
    }

    /**
     * Test division operations
     *
     * @return void
     */
    public function test_division_artisan()
    {

        $this->artisan('operations 5 6 division')
         ->expectsOutput('0');
    }

    /**
     * Test a non-existing operation
     *
     * @return void
     */
    public function test_non_existing_operations_artisan()
    {
        $this->artisan('operations 5 6 Other')
         ->expectsOutput('Operation requested does not exist');

    }
}
