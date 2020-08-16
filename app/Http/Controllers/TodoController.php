<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $folders = Folder::all()->sortByDesc('created_at');
        $todos = Todo::all()->sortByDesc('created_at');
        return view('todos.index', [
            'folders' => $folders,
            'todos' => $todos]);
    }
}
