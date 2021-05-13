@extends('layout.app')
@section('main')
<main>
  <div class="container">
      @foreach($film as $index => $card)
      <a href="{{route('detail', ['id' => $index])}}" class="card col-xs-2">
      <div>

              <div class="cover">
                  <img src="{{$card['thumb']}}" alt="image cover">
              </div>
              <div class="card-title">
                  <h5 class="text-center">{{$card['series']}}</h5>
              </div>


      </div>
      </a>
      @endforeach
      <div class="">
        <button class="load-more text-center" type="button" name="button">Load more</button>
      </div>
  </div>
</main>
@endsection
