<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $todos = [
        (object) [
            'id' => 1,
            'title' => 'タイトル1',
            'status' => '状態1',
            'due_date' => '期限日１',
            'created_at' => now(),
        ],
        (object)  [
            'id' => 2,
            'title' => 'タイトル2',
            'status' => '状態2',
            'due_date' => '期限日2',
            'created_at' => now(),
        ],
        (object)  [
            'id' => 3,
            'title' => 'タイトル3',
            'status' => '状態3',
            'due_date' => '期限日3',
            'created_at' => now(),
        ],
    ];
        return view('todos.index', ['todos' => $todos]);
    }
}
