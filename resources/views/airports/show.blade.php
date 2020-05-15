@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-50 mx-auto">
            <img src="{{url('img/airport.jpg')}}" alt="Airport image" class="card-img-top" style="height: 270px">
            <div class="card-body">
                <h3 class="card-title">{{ $airport->name }}</h3>
                <p class="card-text">
                    {{ $airport->name }} (IATA code: <b>{{ $airport->iata }}</b>, ICIAO code <b>{{ $airport->icia }}</b>)
                    is an airport located in {{$airport->city}}, {{ $airport->country }}. Its geographical coordinates are
                    latitude {{ round($airport->latitude, 3) }}°, longitude {{ round($airport->longitude, 3) }}° and altitude {{ round($airport->altitude, 3) }}°.
                    Its timezone is {{ $airport->timezone > 0? '+' : ''}}{{ $airport->timezone }}, {{ $airport->tz }}
                </p>
            </div>
            <div class="card-body">
                <a href="/airports" class="card-link">All Destinations</a>
            </div>
        </div>
    </div>
@endsection
