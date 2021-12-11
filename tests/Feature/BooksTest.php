<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Activity;
use App\Models\Customer;

class BooksTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCRUD()
    {
        //all
        $Book_Index_response = $this->call('GET', '/api/books', []);
        $this->Status($Book_Index_response, false, 200);

        $activity = Activity::factory()->create();
        //store
        $data =  [  'name' => 'Luis',
                    'surname' => 'Martinez',
                    'email' => 'luismartinez242011@gmail.com',
                    'mobile_number' => '50582608148',
                    'adults' => 1,
                    'childs' => 1,
                    'date' => date("Y-m-d"),
                    'dater' => date("Y-m-d"),
                    'id' => $activity->id
                ];

        $Book_Create_response = $this->call('POST', '/api/books', $data);
        $this->Status($Book_Create_response, false, 200);
    }
}
