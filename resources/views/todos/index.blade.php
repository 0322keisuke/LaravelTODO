@extends('app')

@section('title', 'test_タイトル')

@section('content')
@include('nav')
<div class="container">
  <div class="row mt-2">
    <div class="col col-md-4">
      <nav class="card card-block">
        <div class="card-header primary-color white-text">フォルダ一覧</div>
        <div class="card-text text-center">
          <a href="{{ route('folders.create') }}" class="btn btn-default">
            フォルダを追加する
          </a>
        </div>
        <div class="list-group">
          @foreach($folders as $folder)
          <a href="{{ route('todos.index', ['id' => $folder->id]) }}" class="list-group-item">
            {{ $folder->title }}
          </a>
          @endforeach
        </div>
      </nav>
    </div>

    <div class="column col-md-8">
      <div class="card card-block">
        <div class="card-header primary-color white-text">タスク一覧</div>
        <div class="card-text text-center">
          <a href="{{ route('todos.create')}}" class="btn btn-default w-50 m-2">
            タスクを追加する
          </a>
        </div>
        <table class="table bg-white">
          <thead>
            <tr>
              <th>タイトル</th>
              <th>状態</th>
              <th>期限</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($todos as $todo)
            <tr>
              <td> {{ $todo->title }} </td>
              <td>
                <span class="label">{{ $todo->status }}</span>
              </td>
              <td>{{ $todo->due_date}}</td>
              <td><a href="#">編集</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection