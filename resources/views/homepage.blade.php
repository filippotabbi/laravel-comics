@extends('layout.app')
@section('main')
<main>
  <div class="current-s">
    CURRENT SERIES
  </div>
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
      <div class="flex-center">
        <button class="load-more text-center" type="button" name="button">Load more</button>
      </div>
  </div>
  <div class="container-fluid h-100 bg-azure">
    <div class="container  flex-around">
      <img src="../img/digital.png" alt="">
      <h5>DC DIGITAL</h5>
      <img src="../img/merchandise.png" alt="">
      <h5>DC MERCHANDISE</h5>
      <img src="../img/subscriptions.png" alt="">
      <h5>SUBSCRIPTION</h5>
      <img src="../img/locator.png" alt="">
      <h5>COMIC SHOP LOCATOR</h5>
      <img src="../img/visa.svg" alt="">
      <h5>DC POWER VISA</h5>
    </div>
  </div>
</main>
@endsection
