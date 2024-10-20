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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contribute</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Account</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <div class="search-form"> <!-- New div for search form -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
