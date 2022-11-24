<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
@extends('layout.app')
@section('content')

@if(Session::has('fail'))
<div class="alert alert-danger" role="alert">
  {{Session::get('fail')}}
</div>
@endif
<form action="{{route('loginUser')}}" method="post">
    @csrf
    <section class="vh-100 gradient-custom">
  <div class="container py-0 h-90">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">

            <div class="mb-md-0 mt-md-0 pb-0">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your username and password!</p>

              <div class="form-outline form-white mb-4">
              <span>@error('email') {{$message}} @enderror</span>
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
              <span>@error('password') {{$message}} @enderror</span>
                <input type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div> -->

            <div>
              <p class="pt-3">Don't have an account? <a href="{{route('signup')}}" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

</body>
</html>
@endsection