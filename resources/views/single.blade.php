@extends('layout.app')
@section('main')
<main class="single-main">
  <div class="bg-azure h-60">

  </div>
  <img class="single-img" src="{{$comic['thumb']}}" alt="image cover">
  <div class="container">
    <h3>{{$comic['title']}}</h3>
  </div>
</main>
@endsection
