@extends('layouts.layout')

@section('content')
<!--h2>Lista dei fumetti</h2-->
    <!--@dump($fumetti)-->

    <!--@foreach($fumetti as $fumetto)
    <li>{{ $fumetto['title'] }}</li>
    @endforeach-->
    <div class="card-container">
         @foreach($fumetti as $fumetto)
            <div class="card-item">
                <a href="cardDetail"><!--link alla pagina di dettaglio del singolo fumetto-->
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                    <span>{{ $fumetto['series'] }}</span>
                </a>
            </div>
         @endforeach
    </div>
@endsection