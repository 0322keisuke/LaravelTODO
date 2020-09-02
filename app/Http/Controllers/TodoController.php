<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $folders = Folder::all()->sortByDesc('created_at');
        $todos = Todo::all()->sortByDesc('created_at');
        return view('todos.index', [
            'folders' => $folders,
            'todos' => $todos
        ]);
    }

    public function create(int $id)
    {
        return view('todos.create', [
            'folder_id' => $id
        ]);
    }

    public function store(TodoRequest $request, Todo $todo, int $id)
    {
        $current_folder = Folder::find($id);

        // $todo->folder_id =  $current_folder->folder_id;
        $todo->title = $request->title;
        $todo->status = 1;
        $todo->due_date = $request->due_date;

        $current_folder->todos()->save($todo);

        return redirect()->route(
            'todos.index',
            // ['id' => $current_folder->id,]
            ['id' => 1]
        );
    }
}
