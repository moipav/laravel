<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testValidate(Request $request) {
        
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required|max:255|min:8',
        ]);
       dd($request->get('title'), $request->text);//оба варианта рабочие
        
    }
}
