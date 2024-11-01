<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testValidate(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'text' => 'required|max:255|min:8',
        ]);
        dd($request->get('title'), $request->text);//оба варианта рабочие

    }

    public function users()
    {
        $users = [
            [
                'name' => 'igor',
                'phone' => 79999999999,
                'email' => 'igor@example'
            ],
            [
                'name' => 'fraddy',
                'phone' => 788888888,
                'email' => 'fraddy@example'
            ]
        ];
        return view('users', ['users' => $users]);
    }
}
