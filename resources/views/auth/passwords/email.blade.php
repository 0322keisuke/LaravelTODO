@extends('app')

@section('title', 'パスワード再発行')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6">
      <nav class="card card-default">
        <div class="card-heading">パスワード再発行</div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">再発行リンクを送る</button>
            </div>
          </form>
        </div>
      </nav>
    </div>
  </div>
</div>
@endsection