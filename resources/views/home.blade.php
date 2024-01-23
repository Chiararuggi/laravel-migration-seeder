@extends('layouts.app')

@section('content')
    <h1>Trains:</h1>
    <p>
        @foreach ($trains as $train)
            <li>
                <span>{{ $train->company }}</span>
                <span>{{ $train->departure_station }} / {{$train->arrival_station }}</span>
                
            </li>
        @endforeach
    </p>
@endsection
