@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <h1>Trains:</h1>
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h1>{{ $train->company }}</h1>
                            </div>
                            <div class="card-text">
                                Stazione partenza: {{ $train->departure_station }} <br>Stazione Arrivo:
                                {{ $train->arrival_station }}
                            </div>
                            <div class="card-text">
                                Orario partenza: {{ $train->departure_time }} <br>Orario Arrivo {{ $train->arrival_time }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
