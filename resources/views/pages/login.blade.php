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




<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-5 " >

<form action="login" method="post">
@csrf
    
    <div class="border border-black fw-black px-3 pt-3 pb-2 rounded shadow">
    <h4 class="pt-2 fw-bold text-center">Login</h4>
<div class="form-group mt-2">
<label for="email">Email</label>
<input type="email" id="email" name="email"placeholder="Email" class="form-control" required> 
</div>
<div class="form-group mt-2">
<label for="password">Password</label>
<input type="password"  placeholder="Password"  class=" form-control " id="password" name="password" required> 
    
</div>
<div class="form-group mt-3">

<input type="submit" class="btn link-bg " value="Login"> 
    
</div>
<a href="/signup" style="color: #999;">Don't have an account?</a>



@if ($errors->any())
    <div class=" text-center alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errors->first() }}

</div>
@endif
</div>
</form>

</div>

@include('includes.footer')


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>