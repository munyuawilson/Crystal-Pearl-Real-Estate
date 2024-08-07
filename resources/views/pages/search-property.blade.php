<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/images/logocrystal.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <title>Crystal Pearl Real Estate</title>

        
        <style>
                .form-inline .form-group {
            margin-right: 15px;
        }
        .form-inline .form-check {
            margin-right: 15px;
        }

    </style>

    </head>
    <body >


@include('includes.nav')


<div class="container mt-5">
    <h1 class="mb-4 text-center main-color">Property Search</h1>
    <form class="d-flex flex-wrap align-items-end">
        <div class="form-group me-2">
            <label for="buy-rent"><i class="fas fa-exchange-alt"></i> Buy or Rent</label>
            <select id="buy-rent" class="form-control" name="buy-rent">
                <option value="buy">Buy</option>
                <option value="rent">Rent</option>
            </select>
        </div>
        <div class="form-group me-2">
            <label for="location"> Location</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <input type="text" class="form-control" id="location" name="location" placeholder="Nairobi, Kenya">
            </div>
        </div>
        <div class="form-group me-2">
            <label for="price-min"><i class="fas fa-dollar-sign"></i> Price Min</label>
            <input type="number" class="form-control" id="price-min" name="price-min" placeholder="Min">
        </div>
        <div class="form-group me-2">
            <label for="price-max"><i class="fas fa-dollar-sign"></i> Price Max</label>
            <input type="number" class="form-control" id="price-max" name="price-max" placeholder="Max">
        </div>
        <div class="form-group me-2">
            <label for="property-type"><i class="fas fa-building"></i> Property Type</label>
            <select id="property-type" class="form-control" name="property-type">
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="villa">Villa</option>
                <option value="land">Land</option>
            </select>
        </div>
        <div class="form-group me-2">
            <label for="sort-by"><i class="fas fa-sort"></i> Sort By</label>
            <select id="sort-by" class="form-control" name="sort-by">
                <option value="most-recent">Most Recent</option>
                <option value="featured">Featured</option>
                <option value="high-to-low">Price: High to Low</option>
                <option value="low-to-high">Price: Low to High</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
        </div>
    </form>
</div>


@include('includes.details-properties')
@include('includes.details-properties')
@include('includes.details-properties')
@include('includes.details-properties')



@include('includes.footer')
</body>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>