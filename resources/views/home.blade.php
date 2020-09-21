@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6 m-3">
      <nav class="card card-default">
        <div class="card-heading p-1">
          まずはフォルダを作成しましょう
        </div>
        <div class="card-body">
          <div class="text-center">
            <a href="{{route('folders.create')}}" class="btn btn-primary">
              フォルダ作成ページへ
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
@endsection