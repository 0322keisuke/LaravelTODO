@extends('app')

@section('title', 'フォルダ作成')

@include('nav')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6 m-2">
      <div class="card card-block">
        <div class="card-header primary-color white-text">フォルダを追加する</div>
        <div class="card-text">
          <form action="{{ route('folders.create') }}" method="post">
            @csrf
            <div class="form-group m-2">
              <label for="title">フォルダ名</label>
              <input type="text" class="form-control" name="title" id="title" />
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">送信</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection