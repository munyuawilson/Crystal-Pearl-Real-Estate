<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crystal Pearl Real Estate offers premium property listings, including luxurious homes, apartments, and commercial spaces. Find your dream property with us in prime locations at competitive prices. Explore our expert services in real estate buying, selling, and leasing." />

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
                    <img src="{{ asset('/images/REd.jpeg') }}" class="card-img-top rounded" alt="Real Estate Development">
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
                    <img src="{{ asset('/images/land.jpeg') }}" class="card-img-top rounded" alt="Land Subdivision">
                    <div class="card-body text-center ">
                        <h4 class="card-title fw-bold">Land Subdivision</h4>
                        <span class="card-text">Our efficient and legally compliant land subdivision services maximize land value and usability, helping landowners unlock the full potential of their properties.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container mt-5">
<h2 class="main-color fw-bold pt-5">Why Us? <span class="material-symbols-outlined">
arrow_right_alt
</span></h2>
    <div class="row text-center mt-3 ">
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up">
            <i class="fas fa-home fa-2x mb-3  pt-3"></i>
            <h4 class="fw-bold">WIDE RANGE OF PROPERTIES</h4>
            <span class="pt-3 pb-3">We Offer A Wide Variety of Property Investment Opportunities.</span>
        </div>
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up ">
            <i class="fas fa-hand-holding-usd fa-2x mb-3 pt-3"></i>
            <h4 class="fw-bold">FINANCING MADE EASY</h4>
            <span class="pt-3 pb-3">Our Finance Department Find Financial Solutions to Help you Invest Safely and Correctly.</span>
        </div>
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up">
            <i class="fas fa-users fa-2x mb-3 pt-3"></i>
            <h4 class="fw-bold">TRUSTED BY HUNDREDS</h4>
            <span class="pt-3 pb-3">Over 500 Clients and Two Delivered Projects. Three International Branches.</span>
        </div>
    </div>
    <div class="row text-center mt-3"
    >
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up">
            <i class="fas fa-handshake fa-2x mb-3 pt-3"></i>
            <h4 class="fw-bold">INVEST IN A PARTNERSHIP</h4>
            <span class="pt-3 pb-3">With Property Investment at Crystal Pearl Real Estate You Get a Luxury Real Estate Property and A Market Advisor.</span>
        </div>
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up">
            <i class="fas fa-balance-scale fa-2x mb-3 pt-3 "></i>
            <h4 class="fw-bold">TRANSPARENCY</h4>
            <span class="pt-3 pb-3">Always Stay Informed about Your Investment and Your Properties.</span>
        </div>
        <div class="col mb-4 border shadow mx-5 pb-3 fade-in-up">
            <i class="fas fa-map-marker-alt fa-2x mb-3 pt-3"></i>
            <h4 class="fw-bold">PRIME LOCATIONS</h4>
            <span class="pt-3 pb-3">Every Project is Carefully Hand-Picked to be Nearby Top Social Amenities and Prime Locations.</span>
        </div>
    </div>
</div>









<div class="container my-5">
        <h2 class="mb-4 text-center main-color">Ongoing Projects</h2>

        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/onem1.jpeg') }}" class="project-image" alt="Project A Image">
                    <div class="card-body">
                        <h5 class="card-title">Project A</h5>
                        <p class="card-text">Brief description of Project A...</p>
                        <p class="time-marker">One month ago</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/onem2.jpeg') }}" class="project-image" alt="Project B Image">
                    <div class="card-body">
                        <h5 class="card-title">Project B</h5>
                        <p class="card-text">Brief description of Project B...</p>
                        <p class="time-marker">One month ago</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/onem3.jpeg') }}"class="project-image" alt="Project C Image">
                    <div class="card-body">
                        <h5 class="card-title">Project C</h5>
                        <p class="card-text">Brief description of Project C...</p>
                        <p class="time-marker">One month ago</p>
                    </div>
                </div>
            </div>
            
            <!-- Add more project cards here -->
        </div>

        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/yes1.jpeg') }}"class="project-image" alt="Project A Image">
                    <div class="card-body">
                        <h5 class="card-title">Project A</h5>
                        <p class="card-text">Brief description of Project A...</p>
                        <p class="time-marker">Yesterday</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/yes2.jpeg') }}" class="project-image" alt="Project B Image">
                    <div class="card-body">
                        <h5 class="card-title">Project B</h5>
                        <p class="card-text">Brief description of Project B...</p>
                        <p class="time-marker">Yesterday</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/yes3.jpeg') }}"class="project-image" alt="Project C Image">
                    <div class="card-body">
                        <h5 class="card-title">Project C</h5>
                        <p class="card-text">Brief description of Project C...</p>
                        <p class="time-marker">Yesterday</p>
                    </div>
                </div>
            </div>
            
            <!-- Add more project cards here -->
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/today1.jpeg') }}"  class="project-image"  alt="Project A Image">
                    <div class="card-body">
                        <h5 class="card-title">Project A</h5>
                        <p class="card-text">Brief description of Project A...</p>
                        <p class="time-marker">Today </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/today2.jpeg') }}" class="project-image" alt="Project B Image">
                    <div class="card-body">
                        <h5 class="card-title">Project B</h5>
                        <p class="card-text">Brief description of Project B...</p>
                        <p class="time-marker">Today</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/images/today3.jpeg') }}"  class="project-image" alt="Project C Image">
                    <div class="card-body">
                        <h5 class="card-title">Project C</h5>
                        <p class="card-text">Brief description of Project C...</p>
                        <p class="time-marker">Today</p>
                    </div>
                </div>
            </div>
            
            <!-- Add more project cards here -->
        </div>

    </div>
<div class="container mt-5">
<h2 class="text-center main-color fw-bold pb-3 fade-in-up">Featured Properties</h2>
@include('includes.details-properties')

@include('includes.details-properties')
</div>














<div class="container mt-5">
<h2 class="text-center main-color fw-bold pb-3 fade-in-up">Completed Properties</h2>

<div class="row mt-5">
    <div class="col  text-center border rounded px-5 pt-4 pb-3 mt-2 mx-2">
<img src="{{asset('images/completed1.jpeg')}}" alt="" height="250px">
    </div>
    <div class="col  border rounded px-5 pt-4 pb-3 mt-2 mx-2">
    <div class="text-center text-white ">

    <img src="{{asset('images/completed2.jpeg')}}" alt="" height="250px">

</div>
    </div>

</div>

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

<div class="container my-5">
        <h2 class="text-center mb-4 main-color">Subscription Pricing</h2>
        <div class="row mt-3">
            <!-- Bronze Subscription -->
            <div class="col-md-4">
                <div class="card border-dark mb-4">
                    <div class="card-header text-center bg-dark">
                        <h3>Bronze</h3>
                        <h4 class="my-0">$9.99/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check"></i> Monthly Market Insights</li>
                            <li><i class="fas fa-check"></i> Basic Property Listings</li>
                            <li><i class="fas fa-check"></i> Discounted Fees</li>
                            <li><i class="fas fa-check"></i> Priority Customer Support</li>
                            <li><i class="fas fa-check"></i> Access to Webinars</li>
                        </ul>
                        <a href="#" class="btn btn-gold btn-block">Subscribe</a>
                    </div>
                </div>
            </div>
            <!-- Gold Subscription -->
            <div class="col-md-4">
                <div class="card border-dark mb-4">
                    <div class="card-header text-center bg-gold">
                        <h3>Gold</h3>
                        <h4 class="my-0">$29.99/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check"></i> Enhanced Market Insights</li>
                            <li><i class="fas fa-check"></i> Premium Property Listings</li>
                            <li><i class="fas fa-check"></i> Personalized Investment Consultation</li>
                            <li><i class="fas fa-check"></i> Larger Discounts</li>
                            <li><i class="fas fa-check"></i> Networking Events</li>
                            <li><i class="fas fa-check"></i> Priority Viewing Appointments</li>
                        </ul>
                        <a href="#" class="btn btn-gold btn-block">Subscribe</a>
                    </div>
                </div>
            </div>
            <!-- Platinum Subscription -->
            <div class="col-md-4">
                <div class="card border-dark mb-4">
                    <div class="card-header text-center bg-dark">
                        <h3>Platinum</h3>
                        <h4 class="my-0">$49.99/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check"></i> Comprehensive Market Analysis</li>
                            <li><i class="fas fa-check"></i> Exclusive Property Access</li>
                            <li><i class="fas fa-check"></i> Dedicated Account Manager</li>
                            <li><i class="fas fa-check"></i> Exclusive Discounts</li>
                            <li><i class="fas fa-check"></i> Bespoke Investment Strategy Sessions</li>
                            <li><i class="fas fa-check"></i> VIP Event Access</li>
                            <li><i class="fas fa-check"></i> Concierge Services</li>
                        </ul>
                        <a href="#" class="btn btn-dark btn-block">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container ceo-section">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="{{ asset('/images/ceo.jpg') }}" alt="CEO Picture" class="img-fluid ceo-img" width="300">
            </div>
            <div class="col-md-8">
                <h2 class="ceo-name">Peter Kibugi</h2>
                <p class="ceo-title">CEO & Founder</p>
                <p class="ceo-description fst-italic">
'Unlock Lucrative Real Estate Investment Opportunities with Crystal Pearl Real Estate

Welcome to Crystal Pearl Real Estate, your gateway to high-yield real estate investments in the heart of Africa. Our proven track record in real estate development offers investors an average return on investment (ROI) of over 15% annually, making us a leader in the Kenyan real estate market.

For Real Estate Investors:
Seize the opportunity to partner with us in real estate development projects with exceptional returns and minimal risk. With our expertise, integrity, and strategic approach, we ensure your investments yield maximum profits. Our projects have consistently delivered a 20% increase in property value within the first year, making us a top choice for real estate investment in Kenya.

For Property Owners: Experience seamless property management services that increase asset value by up to 10% annually. We offer precise property valuation services that guarantee true market value and expert land subdivision services that enhance your land’s profitability.

Join us in shaping the future of real estate in Kenya. Contact us today to explore exciting real estate investment opportunities and elevate your property management experience!'

            </p>
            </div>
        </div>
    </div>
    
@include('includes.footer')






    </body>








    <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?5120';
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
                    "messageText":"Hello, %0A I have a question about Crystal Pearl Real Estate",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
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
