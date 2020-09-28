@extends('app')

@section('title', 'パスワード再発行')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6">
      <nav class="card card-default">
        <div class="card-heading">パスワード再発行</div>
        <div class="card-body">
          <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
              <label for="password">新しいパスワード</label>
              <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <div class="form-group">
              <label for="password-confirm">新しいパスワード（確認）</label>
              <input type="password" class="form-control" id="password-confirm" name="password_confirmation" requred />
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">送信</button>
            </div>
          </form>
        </div>
      </nav>
    </div>
  </div>
</div>
@endsection