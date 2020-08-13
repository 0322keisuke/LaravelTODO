@extends('app')

@section('title', 'test_タイトル')

@section('content')
@include('nav')
  <table class="table">
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
        <span class="label">{{ $todo->status }}</span>
        </td>
        <td>{{ $todo->due_date}}</td>
        <td><a href="#">編集</a></td>
    </tr>
    @endforeach
  </table>
@endsection