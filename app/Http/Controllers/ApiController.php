<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

/**
 * @Resource("api")
 */
class ApiController extends Controller
{
    /**
     * 어노테이션 테스트
     * @Get("/api/test/{name}")
     */
    public function a(String $name)
    {
        Cache::get();
        return $name;
    }
}
