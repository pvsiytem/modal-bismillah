@extends('layout.master')

@section('title', 'Home')

@section('content')

    <div class="container-fluid p-0"> <!-- Use container-fluid for full width with no padding -->
        <img src="{{ asset('images/forest.png') }}" alt="Forest" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;"> <!-- Stretch width and maintain aspect ratio -->
    </div>
    
    <h1>About Us</h1>

    <h1>Best Seller</h1>

    <div class="row"> <!-- Start a Bootstrap row -->
        <div class="col-md-4 d-flex justify-content-center"> <!-- Center the cards -->
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Set larger width and height -->
                <img src="{{ asset('images/lanyard.png') }}" class="card-img-top" alt="Product 1" style="height: 180px; object-fit: cover; border-radius: 10px;"> <!-- Increase height for the image -->
                <div class="card-body d-flex flex-column justify-content-between"> <!-- Flexbox for spacing -->
                    <h5 class="card-title">Lanyard</h5>
                    <p class="card-text">$10.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a> <!-- Change to btn-success for green button -->
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center"> <!-- Center the cards -->
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Set larger width and height -->
                <img src="{{ asset('images/earth.png') }}" class="card-img-top" alt="Product 2" style="height: 180px; object-fit: cover; border-radius: 10px;"> <!-- Increase height for the image -->
                <div class="card-body d-flex flex-column justify-content-between"> <!-- Flexbox for spacing -->
                    <h5 class="card-title">Earth Plush</h5>
                    <p class="card-text">$15.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a> <!-- Change to btn-success for green button -->
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center"> <!-- Center the cards -->
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"> <!-- Set larger width and height -->
                <img src="{{ asset('images/tshirt.png') }}" class="card-img-top" alt="Product 3" style="height: 180px; object-fit: cover; border-radius: 10px;"> <!-- Increase height for the image -->
                <div class="card-body d-flex flex-column justify-content-between"> <!-- Flexbox for spacing -->
                    <h5 class="card-title">Eco T-shirt</h5>
                    <p class="card-text">$20.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a> <!-- Change to btn-success for green button -->
                </div>
            </div>
        </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="console.log('Toggler clicked!')">
        <span class="navbar-toggler-icon"></span>
    </button>

    <style>
        .card:hover {
            transform: translateY(-5px); /* Lift the card on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
        }

        .buy-now-btn {
            transition: background-color 0.3s, transform 0.3s; /* Transition for smooth hover effects */
        }

        .buy-now-btn:hover {
            background-color: #4CAF50; /* Darker green on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }
    </style>
@endsection
