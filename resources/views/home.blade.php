@extends('layouts.layout')

@section('content')
<h2>Lista dei fumetti</h2>
<ul>
    <!--@dump($fumetti)-->

    <!--@foreach($fumetti as $fumetto)
    <li>{{ $fumetto['title'] }}</li>
    @endforeach-->
    <div class="card-container">
        @foreach($fumetti as $fumetto)
        <div class="card-item">
            <img src="{{ $fumetto['thumb'] }}" alt="">
            <span>{{ $fumetto['series'] }}</span>
        </div>
        @endforeach
    </div>

</ul>
@endsection