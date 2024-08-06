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

<div class="first-section">
        <div class="container-fluid slide" id="slide1">
        @include('includes.welcome')
        </div>
        <div class="container-fluid slide" id="slide2">
        @include('includes.welcome')
        </div>
        <div class="container-fluid slide" id="slide3">
        @include('includes.welcome')
        </div>
        </div>

        <div class="container mt-5 next-content">
<h2 class="main-color fw-bold pt-5">Why Crystal Pearl Real Estate? <span class="material-symbols-outlined">
arrow_right_alt
</span></h2>
<div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Property Management</h4>  
    <p class="text-black text-start pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus officia repellat amet distinctio culpa temporibus nemo repellendus id dicta nesciunt odio ad eveniet aut officiis accusamus doloremque, harum quia. Recusandae!</p>  
</div>
    <div class="col text-center">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Valuation</h4>
<p class="text-black text-start  pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime nihil tenetur temporibus facere aut! Consequatur, tempore excepturi possimus assumenda omnis atque optio dolore in! Id sapiente adipisci aspernatur necessitatibus architecto!</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Real Estate Development</h4>  
    <p class="text-black text-start pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus officia repellat amet distinctio culpa temporibus nemo repellendus id dicta nesciunt odio ad eveniet aut officiis accusamus doloremque, harum quia. Recusandae!</p>  
</div>
    <div class="col text-center">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Property Buying and Selling</h4>
<p class="text-black text-start  pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime nihil tenetur temporibus facere aut! Consequatur, tempore excepturi possimus assumenda omnis atque optio dolore in! Id sapiente adipisci aspernatur necessitatibus architecto!</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Land Subdivision</h4>  
    <p class="text-black text-start pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus officia repellat amet distinctio culpa temporibus nemo repellendus id dicta nesciunt odio ad eveniet aut officiis accusamus doloremque, harum quia. Recusandae!</p>  
</div>
    
</div>
</div>
@include('includes.search')
<div class="container mt-5">
<h2 class="text-center main-color fw-bold pb-3">Featured Properties</h2>
@include('includes.details-properties')

@include('includes.details-properties')
</div>


@include('includes.footer')






    </body>















<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("show");
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].classList.add("show");
    setTimeout(showSlides, 5000); // Change image every 3 seconds
}

</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>
