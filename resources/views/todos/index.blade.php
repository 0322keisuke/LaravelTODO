@extends('app')

@section('title', 'test_タイトル')

@section('content')
  <div class="container">
    @foreach($todos as $todo) 
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <div class="font-weight-bold">
              {{ $todo->title }} 
            </div> 
        </div>
      </div>
    @endforeach
  </div>
@endsection