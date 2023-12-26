<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestStoreRequest;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $all = Test::all();
        return view('test', compact('all'));
    }

    public function store(TestStoreRequest $request)
    {
        $data = $request->validated();
        $test = Test::make();
        $test->name = $data['name'];
        $test->last_name = $data['last_name'];
        $test->save();
        return redirect()->route('test.index');
    }
}
