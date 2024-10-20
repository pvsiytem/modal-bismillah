@extends('layout.master')

@section('title', 'Home')

@section('content')

    <div class="container-fluid p-0"> <!-- Use container-fluid for full width with no padding -->
        <img src="{{ asset('images/forest.png') }}" alt="Forest" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;"> <!-- Stretch width and maintain aspect ratio -->
    </div>
    
    <h1>About Us</h1>

    <h1>Best Seller</h1>

    <div class="row"> <!-- Start a Bootstrap row -->
        <div class="col-md-4"> <!-- 1st card -->
            <div class="card mb-4">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$10.00</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"> <!-- 2nd card -->
            <div class="card mb-4">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">$15.00</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4"> <!-- 3rd card -->
            <div class="card mb-4">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">$20.00</p>
                    <a href="#" class="btn btn-primary">More</a>
                </div>
            </div>
        </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="console.log('Toggler clicked!')">
        <span class="navbar-toggler-icon"></span>
    </button>
@endsection
