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

        
        </style>
    </head>
    <body >


@include('includes.nav')


<div class="container-fluid about-bg">

<h1 class="about-us text-center">About Us</h1>


</div>

<div class="container mt-5">
        <h1 class="main-color">Crystal Pearl Real Estate</h1>
        <p>Founded in 2018, Crystal Pearl Real Estate began as a small venture focusing on land buying and selling. Over the years, we have grown into a full-service real estate firm, known for our integrity, expertise, and dedication to customer satisfaction. With a portfolio that includes over 5 residential apartments, 10 townhouses/villas, and more than 2,000 title deeds issued, we have established ourselves as a trusted name in the Kenyan real estate market.</p>

        <h2 class="pt-5 pb-5">Core Services</h2>
        <div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Property Management</h4>  
    <p class="text-black text-start pt-3">We offer expert guidance in land transactions, ensuring secure and profitable investments. Our team conducts thorough due diligence to verify property titles and ensure compliance with legal requirements.</p>  
</div>
    <div class="col text-center">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Valuation</h4>
<p class="text-black text-start  pt-3">With over 1,000 property valuations completed, our experienced professionals provide accurate and reliable assessments, helping clients make informed investment decisions.</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Real Estate Development</h4>  
    <p class="text-black text-start pt-3">We have successfully developed over 5 residential apartments, with a focus on quality, innovation, and sustainability. Our projects are designed to meet the needs of modern homeowners and investors.</p>  
</div>
    <div class="col text-center">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Property Buying and Selling</h4>
<p class="text-black text-start  pt-3">We offer tailored leasing and letting solutions for both residential and commercial properties. Our team works closely with tenants and landlords to ensure a smooth and efficient process.</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Land Subdivision</h4>  
    <p class="text-black text-start pt-3">Our efficient and legally compliant land subdivision services maximize land value and usability, helping landowners unlock the full potential of their properties.</p>  
</div>
    
</div>
</div>
        </div>

        @include('includes.footer')
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>