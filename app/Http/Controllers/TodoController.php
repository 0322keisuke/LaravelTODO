<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all()->sortByDesc('created_at');
        return view('todos.index', ['todos' => $todos]);
    }
}
