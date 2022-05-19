
@extends('layouts.layout')

@section('content')
<div class="card-item">
    <img src="{{ $fumetti['thumb'] }}" alt="">
    <span>{{ $fumetti['series'] }}</span>
</div>
@endsection

