@extends('layout.main2') 
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Management Consultancy</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">We are providing a better Management Consultancy</h1>
            </div>
            <div class="row g-5">

           

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card" style="width: 800px; height: 350px; margin: 0 auto;">
        <img src="{{ URL::asset('import/assets/img/PIC 5.jpg')}}" alt="Image 1">
        <div class="text">Stay focused</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width: 800px; height: 350px; margin: 0 auto;">
        <img src="{{ URL::asset('import/assets/img/PIC 5.jpg')}}" alt="Image 2">
        <div class="text">Make your mind positive</div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card" style="width: 800px; height: 350px; margin: 0 auto;">
        <img src="{{ URL::asset('import/assets/img/PIC 5.jpg')}}" alt="Image 3">
        <div class="text">Marketing and business lessons</div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


            </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Training Services</h5> -->
                <h1 class="mb-0" style="color:#2BAF5C ">We Are Experts</h1>
            </div>
            <div class="row g-5">
            <div class="card w-75 mx-auto shadow bg-light rounded" style="color: #000400">
  <div class="card-body">
    <p class="card-text">
    We provide external, objective advice and analysis of an Institution/company that can be extremely beneficial. Also
to provide a perspective that those within company/Institution cannot and, as a result, can address issues before
they become problems and devise unique and creative solutions. Our Advisory Services include Business Plan
Development, Organizational design and review, Due diligence, retrenchment services and Project Management.
    </p>
  </div>
</div>

            </div>
</div>
</div>
<div>
    @endsection