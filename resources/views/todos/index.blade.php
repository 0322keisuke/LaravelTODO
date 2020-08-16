@extends('app')

@section('title', 'test_タイトル')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
              <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
                {{ $folder->title }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
    
      <div class="column col-md-8">
        <div class="panel panel-default">
        <div class="panel-heading">タスク</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
          </div> 
          <table class="table">
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