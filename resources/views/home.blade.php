@extends('layout.app')
@section('title', 'Home')


@section('content')

    <div class="container-fluid m-0 parallax">
        <div class="row d-flex justify-content-center ">
            <div class="colo-md-4 text-center topDiv   ">
                <h1 class="text-white ml-5" style="color: #FF1!important">Software Engineer</h1>
                <h3 class="text-white">Mobile & Web</h3>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
    <div class="container text-center mt-5">
        <h2>My Services</h2>
        <div class="row ">

            @for($i = 0; $i < 3; $i++)
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/laravel.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prjects {{ $i }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>

                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="container text-center mt-5">
        <h2>My Prjects</h2>
        <div class="row ">

            @for($i = 0; $i < 3; $i++)
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/laravel.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service {{ $i }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                                <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="container text-center mt-5 mb-5">
        <h2>Contact Information</h2>
        <div class="row mt-5">
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
                       <textarea class="form-control" id="exampleInputPassword1" name="" id="" cols="20" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">Send Now</button>
                </form>
            </div>
            <div class="col-md-6 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.840218738401!2d90.37767645090125!3d23.753076584512378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ae70ccad3d%3A0xc184d7b62af05d49!2sSukrabad%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1595611777090!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </div>

@endsection
