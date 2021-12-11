<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCRUD()
    {
        //all
        $Category_Index_response = $this->call('GET', '/api/categories', []);
        $this->Status($Category_Index_response, false, 200);
    }
}
