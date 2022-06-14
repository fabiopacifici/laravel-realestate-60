@extends('layout.app')

@section('content')

<div class="p-5 bg-light" >
  <div class="container">
    <h1 class="display-3">{{$house->address}}</h1>
  </div>
</div>

<div class="property">
  <img src="{{$house->image}}" alt="" class="img-fluid">
  <div class="card-body">
    <address>
      {{$house->address}}
      {{$house->city}}
    </address>
  </div>

</div>


@stop