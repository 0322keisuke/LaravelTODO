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
          <a href="{{ route('todos.index', ['id' => $folder->id]) }}" class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}">
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
          <a href="{{ route('todos.create',['id' => $current_folder_id])}}" class="btn btn-default w-50 m-2">
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
                <span class="badge {{ $todo->status_class }}">{{ $todo->status_badge }}</span>
              </td>
              <td>{{ $todo->due_date}}</td>
              <td><a href="{{ route('todos.edit',[ 'todo' => $todo,
                'id' => $current_folder_id])}}">
                  <span class="badge badge-default">
                    編集 </span></a>
              </td>
              <td>
                <a data-toggle="modal" data-target="#modal-delete-{{$todo->id}}">
                  <span class="badge badge-danger"> 削除 </span>
                </a>

                <!-- modal -->
                <div id="modal-delete-{{ $todo->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-deader">
                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" action="{{route('todos.destroy',['todo'=> $todo,'id' => $current_folder_id])}}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                          {{ $todo->title }}を削除します。よろしいですか？
                        </div>
                        <div class="modal-footer justify-content-between">
                          <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                          <button type="submit" class="btn btn-danger">削除する</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- modal -->

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection