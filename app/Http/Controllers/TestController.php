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

    function testCollection()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John',
                'status' => 'ban'
            ],
            [
                'id' => 2,
                'name' => 'Jane',
                'status' => 'active'
            ],
            [
                'id' => 3,
                'name' => 'James',
                'status' => 'ban'
            ],
            [
                'id' => 4,
                'name' => 'Ban',
                'status' => 'active'
            ],
        ];

        $bannedUsers = [];

        foreach ($users as $user) {
            if ($user['status'] === 'ban') {
                $bannedUsers[] = $user;
            }
        }
        $collectionUsers = collect($users);
        $foroch = $collectionUsers->map(function ($user) {
            return $user['name'] . ',' . $user['status'];
        });

        $filtered = $collectionUsers->filter(function ($user) {
            return $user['status'] !== 'ban' && $user['id'] > 2;
        });

//        $reduced = $collectionUsers->reduce()
        dd($filtered);
    }
}
