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
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
        <title>Crystal Pearl Real Estate</title>
        
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
<h2 class="main-color fw-bold pt-5">Crystal Pearl Real Estate Services <span class="material-symbols-outlined">
arrow_right_alt
</span></h2>
<div class="row mt-5">
    <div class="col text-center fade-in-up ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Property Management</h4>  
    <p class="text-black text-start pt-3">We offer expert guidance in land transactions, ensuring secure and profitable investments. Our team conducts thorough due diligence to verify property titles and ensure compliance with legal requirements.</p>  
</div>
    <div class="col text-center fade-in-up">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Valuation</h4>
<p class="text-black text-start  pt-3">With over 1,000 property valuations completed, our experienced professionals provide accurate and reliable assessments, helping clients make informed investment decisions.</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center fade-in-up">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Real Estate Development</h4>  
    <p class="text-black text-start pt-3">We have successfully developed over 5 residential apartments, with a focus on quality, innovation, and sustainability. Our projects are designed to meet the needs of modern homeowners and investors.</p>  
</div>
    <div class="col text-center fade-in-up">
    <img src="{{ asset('/images/commercial.jpeg') }}" class="rounded" alt="logo"  height="250px">
<h4 class="text-black fw-bold pt-3">Property Buying and Selling</h4>
<p class="text-black text-start  pt-3">We offer tailored leasing and letting solutions for both residential and commercial properties. Our team works closely with tenants and landlords to ensure a smooth and efficient process.</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col text-center fade-in-up ">
    <img src="{{ asset('/images/apartment4.jpg') }}" class="rounded" alt="logo"  height="250px">
    <h4 class="text-black fw-bold pt-3">Land Subdivision</h4>  
    <p class="text-black text-start pt-3">Our efficient and legally compliant land subdivision services maximize land value and usability, helping landowners unlock the full potential of their properties.</p>  
</div>
    
</div>
</div>

<div class="container mt-5">
<h2 class="main-color fw-bold pt-5">Why Us? <span class="material-symbols-outlined">
arrow_right_alt
</span></h2>
    <div class="row text-center mt-3">
        <div class="col mb-4 border shadow mx-2 fade-in-up">
            <i class="fas fa-home fa-2x mb-3  pt-3"></i>
            <h4>WIDE RANGE OF PROPERTIES</h4>
            <p>We Offer A Wide Variety of Property Investment Opportunities.</p>
        </div>
        <div class="col mb-4 border shadow mx-2 fade-in-up ">
            <i class="fas fa-hand-holding-usd fa-2x mb-3 pt-3"></i>
            <h4>FINANCING MADE EASY</h4>
            <p>Our Finance Department Find Financial Solutions to Help you Invest Safely and Correctly.</p>
        </div>
        <div class="col mb-4 border shadow mx-2 fade-in-up">
            <i class="fas fa-users fa-2x mb-3 pt-3"></i>
            <h4>TRUSTED BY HUNDREDS</h4>
            <p>Over 500 Clients and Two Delivered Projects. Three International Branches.</p>
        </div>
    </div>
    <div class="row text-center mt-3"
    >
        <div class="col mb-4 border shadow mx-2 fade-in-up">
            <i class="fas fa-handshake fa-2x mb-3 pt-3"></i>
            <h4>INVEST IN A PARTNERSHIP</h4>
            <p>With Property Investment at Crystal Pearl Real Estate You Get a Luxury Real Estate Property and A Market Advisor.</p>
        </div>
        <div class="col mb-4 border shadow mx-2">
            <i class="fas fa-balance-scale fa-2x mb-3 pt-3 "></i>
            <h4>TRANSPARENCY</h4>
            <p>Always Stay Informed about Your Investment and Your Properties.</p>
        </div>
        <div class="col mb-4 border shadow mx-2 fade-in-up">
            <i class="fas fa-map-marker-alt fa-2x mb-3 pt-3"></i>
            <h4>PRIME LOCATIONS</h4>
            <p>Every Project is Carefully Hand-Picked to be Nearby Top Social Amenities and Prime Locations.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
<h2 class="text-center main-color fw-bold pb-3 fade-in-up">Featured Properties</h2>
@include('includes.details-properties')

@include('includes.details-properties')
</div>

<div class="container mt-5">
<h2 class="text-center main-color fw-bold pb-3 fade-in-up">Completed Properties</h2>
@include('includes.details-properties')

@include('includes.details-properties')
</div>


<div class="container mt-5">
    <h2 class="text-center mb-5 main-color">Client Testimonials</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="testimonial">
                <p class="fst-italic">"Crystal Pearl Real Estate provided exceptional service throughout our home buying process. Their team was professional, knowledgeable, and dedicated to finding the perfect property for our family."</p>
                <p class="client-name">— Peter Njogu, Homeowner</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="testimonial">
                <p class="fst-italic">"Investing with Crystal Pearl Real Estate has been a rewarding experience. Their transparent operations and commitment to delivering high-quality projects have exceeded our expectations."</p>
                <p class="client-name">— Wilson Munyua, Real Estate Investor</p>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')






    </body>









    <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?19402';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Wati",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question about Crystal Pearl real estate?",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":true,
                    "phoneNumber":"254727419696"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>





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
