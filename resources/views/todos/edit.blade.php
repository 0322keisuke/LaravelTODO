@extends('app')

@section('title', 'タスク編集')

@include('nav')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6 m-2">
      <div class="card card-block">
        <div class="card-header primary-color white-text">タスクを編集する</div>
        @include('error_card_list')
        <div class="card-text">
          <form method="post" action="{{ route('todos.update',[
            'todo' => $todo,
            'id' => $folder_id ]) }}">
            @method('PATCH')
            @include('todos.form')
            <div class="text-right">
              <button type="submit" class="btn btn-primary">編集する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- flatpickrスクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<!-- 日本語化のための追加スクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>

<script>
  flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>
@endsection