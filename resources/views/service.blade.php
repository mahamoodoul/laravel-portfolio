@extends('layout.app')
@section('title', 'Service')

@section('content')

<div class="container-fluid bg-dark mt-2 ">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h5 class="text-white">My Service</h5>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">

            @for($i = 0; $i < 3; $i++)
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/laravel.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service {{ $i }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>

                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">Send Now</button>
                </form>
            </div>
            <div class="col-md-6 mt-10 ml-10">
                <h5>Address</h5>
                <p>MD Mahamodul Islam</p>
                <p>Mobile:01773521823</p>
                <p>Address:Sukrabad,Dhanmondi,Dhaka,Bangladesh</p>
            </div>
        </div>
    </div>




@endsection
