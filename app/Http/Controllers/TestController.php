<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestStoreRequest;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function store(TestStoreRequest $request)
    {
        $data = $request->validated();
        Test::create($data);
        return view('test');
    }
}
