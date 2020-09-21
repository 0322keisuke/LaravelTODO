@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div class="row">
  <div class="mx-auto col col-md-offset-3 col-md-6 m-2">
    <nav class="card card-default">
      <div class="card-heading">会員登録</div>
      <div class="card-body">
        @include('error_card_list')
        <form action="{{ route('register')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" />
          </div>
          <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" />
          </div>
          <div class="form-grop">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label for="password-confirm">パスワード(確認)</label>
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-primary">送信</button>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div>
@endsection