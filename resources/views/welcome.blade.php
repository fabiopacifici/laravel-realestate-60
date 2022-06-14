@extends('layout.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Real Estate Agency</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <hr class="my-2">

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Visit Properties</a>
        </p>
    </div>
</div>

<section class="container">

    <h3>Our properties</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus veritatis beatae assumenda laboriosam illo eos perferendis maiores modi nihil consequatur, maxime fugiat. Similique quis odio et tempora perferendis ex minus.</p>


    <div class="houses row row-cols-1 row-cols-sm-3 g-4">
        @forelse($houses as $house)
        <div class="col">
            <div class="card">
                <img src="{{$house->image}}" alt="" class="img-fluid">
                <div class="card-body">
                    <address>
                        {{$house->address}}
                        {{$house->city}}
                    </address>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            Nothing here yet!
        </div>

        @endforelse
    </div>

</section>



@stop