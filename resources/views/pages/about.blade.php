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
<p>Crystal Pearl Real Estate is a leading real estate company based in Nairobi, Kenya. With expertise in land acquisition, property development, and property management, we are dedicated to delivering comprehensive real estate solutions. Our goal is to maximize value for clients and investors through strategic planning, innovative development, and a commitment to excellence.</p>
  
<p>Founded in 2018, Crystal Pearl Real Estate began as a small venture focusing on land buying and selling. Over the years, we have grown into a full-service real estate firm, known for our integrity, expertise, and dedication to customer satisfaction. With a portfolio that includes over 5 residential apartments, 10 townhouses/villas, and more than 2,000 title deeds issued, we have established ourselves as a trusted name in the Kenyan real estate market.</p>
<h4 class="">Vision</h4>
<p>To be recognized as the top real estate developer in Kenya by providing exceptional services and attracting real estate investors locally and from the diaspora.</p>
<h4 class="">Mision</h4>
<p>To deliver diverse and high-quality real estate services that exceed client expectations, fostering sustainable growth and development within the communities we serve.</p>


<h2 class="pt-5 pb-5">Core Services</h2>
        
        <div class="container my-5">
        <div class="row mt-5">
            <!-- Property Management -->
            <div class="col-md-6 mb-4 fade-in-up">
                <div class="card border-dark">
                    <img src="{{ asset('/images/apartment4.jpg') }}" class="card-img-top rounded" alt="Property Management">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Property Management</h4>
                        <span class="card-text">Our comprehensive property management services enhance property value and optimize returns. We handle tenant placement, rent collection, maintenance, and financial reporting, providing peace of mind to property owners.</span>
                    </div>
                </div>
            </div>
            <!-- Valuation -->
            <div class="col-md-6 mb-4 fade-in-up">
                <div class="card border-dark">
                    <img src="{{ asset('/images/apartment2.jpeg') }}" class="card-img-top rounded" alt="Valuation">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Valuation</h4>
                        <span class="card-text">With over 1,000 property valuations completed, our experienced professionals provide accurate and reliable assessments, helping clients make informed investment decisions.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5"> 
            <!-- Real Estate Development -->
            <div class="col-md-6 mb-4 fade-in-up">
                <div class="card border-dark">
                    <img src="{{ asset('/images/apartment4.jpg') }}" class="card-img-top rounded" alt="Real Estate Development">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Real Estate Development</h4>
                        <span class="card-text">We have successfully developed over 5 residential apartments, with a focus on quality, innovation, and sustainability. Our projects are designed to meet the needs of modern homeowners and investors.</span>
                    </div>
                </div>
            </div>
            <!-- Property Buying and Selling -->
            <div class="col-md-6 mb-4 fade-in-up">
                <div class="card border-dark">
                    <img src="{{ asset('/images/apartment2.jpeg') }}" class="card-img-top rounded" alt="Property Buying and Selling">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Property Buying and Selling</h4>
                        <span class="card-text">We offer tailored leasing and letting solutions for both residential and commercial properties. Our team works closely with tenants and landlords to ensure a smooth and efficient process.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- Land Subdivision -->
            <div class="col-md-12 mb-4 fade-in-up">
                <div class="card border-dark">
                    <img src="{{ asset('/images/apartment4.jpg') }}" class="card-img-top rounded" alt="Land Subdivision">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Land Subdivision</h4>
                        <span class="card-text">Our efficient and legally compliant land subdivision services maximize land value and usability, helping landowners unlock the full potential of their properties.</span>
                    </div>
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