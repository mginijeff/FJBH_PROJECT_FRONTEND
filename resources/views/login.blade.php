@extends('layout.main2') 
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color: #000400">Login</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">Place your credentials here:</h1>
            </div>
            <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="card shadow bg-light" style="max-width: 350px;">
    <div class="card-body">
      <h5 class="card-title">Login</h5>
      <form>
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" style="background: #000400;"><i class="bi bi-person-fill" style="color:#EDC933"></i></span>
            <input type="text" class="form-control" placeholder="Username (Phone Number)" style="background: #FFFFFF;">
          </div>
        </div>
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" style="background: #000400;"><i class="bi bi-lock-fill" style="color:#EDC933"></i></span>
            <input type="password" class="form-control" placeholder="Password" style="background: #FFFFFF">
          </div>
        </div>
        <a href="login" class="btn  d-flex justify-content-center" style="background: #2BAF5C; color:#FFFFFF">Login</a>
      </form>
      <p class="text-center mt-3" style="color: #000400;">Don't have an account? <a href="register" style="color: #2BAF5C;">Register here</a></p>
    </div>
  </div>
</div>
          
        </div>
        
</div>



@endsection