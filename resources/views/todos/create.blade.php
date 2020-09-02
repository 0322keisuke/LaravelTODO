@extends('app')

@section('title', 'タスク作成')

@include('nav')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6 m-2">
      <div class="card card-block">
        <div class="card-header primary-color white-text">タスクを追加する</div>
        <div class="card-text">
          <form action="{{ route('todos.create',['id' => $folder_id ]) }}" method="post">
            @csrf
            <div class="form-group m-2">
              <label for="title">タイトル名</label>
              <input type="text" class="form-control" name="title" id="title" />
              <label for="title">期限</label>
              <input type="text" class="form-control" name="due_date" id="due_date" />
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">追加</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection