<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <style>
        .navbar {
            background: url('/images/wavey.png') no-repeat; /* Background image */
            background-position: -700px center; /* Shift background to the left by 710px */
            background-size: auto; /* Ensure the image covers the navbar */
            height: 60px; /* Set a height for the navbar */
            position: relative; /* Ensure positioning context for the absolute child */
        }

        .navbar-bg {
            background: url('/images/polka-dot.png') no-repeat center center; /* Center the polka dot background */
            background-size: 120% 100%; /* Stretch the width to 120% and keep height 100% */
            height: 60px; /* Set a height for the background */
            position: absolute; /* Absolute positioning */
            top: 0; /* Align to the top of the navbar */
            left: 0; /* Align to the left */
            right: 0; /* Align to the right */
            bottom: 0; /* Align to the bottom */
            z-index: -1; /* Send the background behind the content */
        }

        .navbar-nav {
            margin-left: 20px; /* Adjust this value to move the nav items to the right */
        }

        .navbar-nav .nav-link {
            color: black !important; /* Set navbar text color to black */
            font-size: 1.1rem; /* Adjust font size for navigation links */
        }

        .navbar-nav .nav-link:hover {
            color: white !important; /* Change text color to white on hover */
        }

        .navbar-brand {
            color: black !important; /* Set navbar brand text color to black */
        }

        .navbar-brand:hover {
            color: white !important; /* Change brand text color to white on hover */
        }

        .search-form {
            margin-left: auto; /* Move search form to the right */
            margin-right: 20px; /* Add space on the right */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="navbar-bg"></div> <!-- Background for the navbar -->
        <a class="navbar-brand" href="#">
            <h3 class="mb-0">EcoSense</h3>
        </a>
        <!-- Move ms-auto to navbar-toggler for alignment on the right -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Add text-end class to align items to the right in the collapsible menu -->
            <ul class="navbar-nav ms-auto text-end">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article') }}">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('merchandise') }}">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contribute') }}">Contribute</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="search-form"> <!-- New div for search form -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
