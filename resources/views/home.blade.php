@extends('layout.master')

@section('title', 'Home')

@section('content')

    <div class="hero">
        <div class="hero-content"> <!-- Added a wrapper for left alignment -->
            <h1>Preserve Our Forests, Protect Our Future</h1>
            <p>Together, we can make a difference</p>
            <p>Join Us in Our Mission Today</p>
            <a href="#" class="btn btn-success rounded-pill">Contribute Now</a> <!-- Button for action -->
        </div>
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

    <style>
        .hero {
            background: url('{{ asset('images/forest.png') }}') no-repeat left center; /* Align image to the left */
            background-size: cover; /* Cover the entire section */
            height: 400px; /* Set height for the hero section */
            position: relative; /* Ensure positioning context for text */
            display: flex; /* Use flexbox to center text */
            align-items: center; /* Center text vertically */
            color: black; /* Text color */
            text-align: center; /* Align text to the left */
            margin-bottom: 20px; /* Add some space below the hero section */
            width: 100%; /* Ensure the hero section takes the full width */
            padding: 20px; /* Add some padding for the content */
        }

        .hero-content {
            max-width: 600px; /* Optional: Set a max width for the content */
        }

        .hero h1 {
            font-size: 2.5rem; /* Font size for the main text */
            margin-bottom: 10px; /* Space below the main text */
        }

        .hero p {
            font-size: 1.2rem; /* Font size for the secondary text */
        }

        @media (max-width: 768px) { /* Adjust height for smaller screens */
            .hero {
                height: 300px; /* Decrease height on smaller screens */
            }
        }

        @media (max-width: 576px) { /* Further adjustments for extra small screens */
            .hero {
                height: 200px; /* Further decrease height */
            }
        }

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

@include('layout.footer')
    
@endsection
