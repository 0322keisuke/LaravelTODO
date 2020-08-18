<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\FolderRequest;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function create()
    {
        return view('folders.create');
    }

    public function store(FolderRequest $request, Folder $folder)
    {
        $folder->title = $request->title;
        $folder->save();
        return redirect()->route(
            'tasks.index',
            ['id' => $folder->id,]
        );
    }
}
