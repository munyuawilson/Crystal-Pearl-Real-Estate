<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/images/logocrystal.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <title>Crystal Pearl Real Estate</title>

        
        
    </head>
    <body >


@include('includes.nav')

<div class="container-fluid about-bg">

<h1 class="about-us text-center">Contact Us</h1>


</div>
<div class="container mt-5">
    
    <p>For more information on real estate investment opportunities and partnerships, please contact us:</p>
    <ul class="list-unstyled">
        <li><i class="fas fa-globe"></i> <a href="#">Crystal Pearl Real Estate Website</a></li>
        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> info@crystalpearlrealestate.com</li>
        <li><i class="fas fa-phone"></i> <strong>Phone:</strong> +254727419696</li>
        <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Crystal Pearl Real Estate, Nairobi, Kenya</li>
    </ul>
    <p>Join us at Crystal Pearl Real Estate as we continue to transform the real estate landscape in Kenya, creating lasting value for our clients and investors.</p>
</div>



@include('includes.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>
