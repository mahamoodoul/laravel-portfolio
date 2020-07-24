@extends('layout.app')
@section('title','Portfolio')



@section('content')


<div class="container-fluid bg-dark mt-2 ">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h5 class="text-white">My Portfolio</h5>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
       
        @for($i=0; $i<10 ; $i++ )
        <div class="col-md-3 p-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title {{$i}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>






@endsection