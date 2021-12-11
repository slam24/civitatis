<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivitiesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCRUD()
    {
        //all
        $Activity_Index_response = $this->call('GET', '/api/activities?typeOption=all', []);
        $this->Status($Activity_Index_response, false, 200);

        //range
        $Activity_Index_response_all_range = $this->call('GET', '/api/activities?typeOption=range&start=2021-12-01&end=2021-12-31', []);
        $this->Status($Activity_Index_response_all_range, false, 200);
    }
}
