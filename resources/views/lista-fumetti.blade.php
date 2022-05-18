@extends('main-layout')
@include('config/comics')

@section('lista')
<h2>Lista dei fumetti</h2>
<ul>
    @foreach($fumetti as $fumetto)
    <li>{{ $fumetto['title'] }}</li>
    @endforeach
</ul>
@endsection