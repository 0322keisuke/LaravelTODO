@extends('app')

@section('title', 'ログイン')

@section('content')
<div class="row">
  <div class="mx-auto col col-md-offset-3 col-md-6 m-2">
    <nav class="card card-default">
      <div class="card-heading">ログイン</div>
      <div class="card-body">

        @include('error_card_list')

        <form action="{{ route('login')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="text" class="form-control" id="email" name="email" required value="{{old('email')}}" />
          </div>
          <div class="form-grop">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <input type="hidden" name="remember" id="remember" value="on">

          <div class="text-right">
            <button type="submit" class="btn btn-primary">ログイン</button>
          </div>
        </form>

        <div class="mt-0">
          <a href="{{ route('register') }}" class="card-text"> ユーザー登録はこちら </a>
        </div>

      </div>
    </nav>
    <div class="text-center mt-1">
      <a href="{{ route('password.request') }}">パスワードの変更はこちらから</a>
    </div>
  </div>
</div>
@endsection