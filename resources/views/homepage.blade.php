@extends('layout.app')
@section('main')
<div class="container">
    @foreach($film as $card)
    <div class="card col-xs-2">

            <div class="cover">
                <img src="{{$card['thumb']}}" alt="image cover">
            </div>
            <div class="card-title">
                <span>{{$card['title']}}</span>
            </div>


    </div>
    @endforeach
</div>
@endsection
