<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\FolderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function create()
    {
        return view('folders.create');
    }

    public function store(FolderRequest $request, Folder $folder)
    {
        $folder->title = $request->title;
        Auth::user()->folders()->save($folder);

        return redirect()->route(
            'todos.index',
            ['id' => $folder->id,]
        );
    }
}
