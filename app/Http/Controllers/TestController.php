<?php

namespace App\Http\Controllers;

use http\Client\Response;

class TestController extends Controller
{
    //
    public function test()
    {
        return response(['a'=>'b'])
                ->header('test', 'test_value');
    }
}
