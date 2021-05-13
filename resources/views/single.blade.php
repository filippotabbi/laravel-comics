@extends('layout.app')
@section('main')
<main class="single-main">
  <div class="bg-azure h-60">

  </div>
  <img class="single-img" src="{{$comic['thumb']}}" alt="image cover">
  <div class="container">
    <div class="col-xs-12">
      <div class="col-xs-7">
        <h3>{{$comic['title']}}</h3>
        <div class="col-xs-12 green-flex">
          <span>U.S. Price :{{$comic['price']}}</span>
          <div class="">
            <span>AVAILABLE  </span>
            <span> <b>  |  Check Availability</b> </span>
          </div>
        </div>
        <p class="descr">{{$comic['description']}}</p>
      </div>
      <div class="col-xs-5">
        <p class="text-center">ADVERTISEMENT</p>
        <img src="../img/adv.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid white-fk table">
    <div class="container">
      <div class="col-xs-6">
        <h3>Talent</h3>
        <hr>
        <div class="col-xs-4 ">
          Art by :
        </div>
        <div class="col-xs-8 blue">
            @foreach ($comic['artists'] as $artisti)
              {{$artisti}}
             @endforeach


        </div>
        <hr>
        <div class="col-xs-4 ">
          Written by :
        </div>
        <div class="col-xs-8 blue">
          @foreach ($comic['writers'] as $scrittori)
            {{$scrittori}}
           @endforeach

        </div>
        <hr>
      </div>
      <div class="col-xs-6">
        <h3>Specs</h3>
        <hr>
        <div class="col-xs-4 ">
          Series :
        </div>
        <div class="col-xs-8 blue">
          {{$comic['series']}}
        </div>
        <hr>
        <div class="col-xs-4 ">
          U.S. Price :
        </div>
        <div class="col-xs-8">
          {{$comic['price']}}
        </div>
        <hr>
        <div class="col-xs-4 ">
          ON Sale Date :
        </div>
        <div class="col-xs-8">
          {{$comic['sale_date']}}
        </div>
        <hr>
      </div>
    </div>

  </div>
</main>
@endsection
