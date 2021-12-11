<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function Status($data, $returnJson, $status){
        $Json = json_decode($data->getContent());
        if ($returnJson == true) {
            dd($Json);
        }
        $this->assertEquals($status, $data->status());

        return $Json;
    }
}
