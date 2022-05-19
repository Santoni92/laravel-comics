
@extends('layouts.layoutDetail')

@section('contentDetail')
<div class="card-container">
         <div class="card-item">
                 <img src="{{ $fumetti['thumb'] }}" alt="">
                 <span>{{ $fumetti['series'] }}</span>
             </a>
         </div>
 </div>
@endsection

