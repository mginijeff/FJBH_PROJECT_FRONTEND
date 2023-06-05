@extends('layout.main2') 
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Training Services</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">We expand your knowledge</h1>
            </div>
            <div class="row g-5">
            <div class="card w-75 mx-auto shadow bg-light rounded" style="color: #000400">
  <div class="card-body">
    <p class="card-text">
    Training and development programs provide a host of benefits. They enhance employee performance, boost
employee productivity, reduce employee turnover, and improve company culture. Explore the importance of
training and development programs for employees and employers by pursuing a career in human resources.
It’s no surprise that employees who get regular opportunities to learn, develop, and advance are more likely
to stay with a company. Bob Nelson, author of 1,001 Ways to Engage Employees, reports that learning and
development are among the top factors in employee engagement. We strategically focusing on the
and Compliance, Payroll services, Employee Screening and Background checks and Labor services
    </p>
  </div>
</div>

            </div>
</div>
</div>
<div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Training Services</h5> -->
                <h1 class="mb-0" style="color:#2BAF5C ">We Offer different classes for training</h1>
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
<div class="row g-0 mb-3">
  <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="padding-left: 50px;">
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Performance Management Training</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Health and Safety Training</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>New employee training</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Mentoring programs</h5>
  </div>
  <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="position: relative;">
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Training for Labor compliance</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Management training</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Sales and Marketing training</h5>
    <h5 class="mb-3"><i class="fa fa-check me-3" style="color:#EDC933"></i>Apprenticeships</h5>
    <!-- <div class="col-lg-5" style="min-height: 300px;">
      <div class="position-relative h-100">
        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('import/assets/img/HR%2091.jpg')}}" style="object-fit: cover; left: 50%; top: 50%; transform: translate(-50%, -50%);">
      </div>
    </div> -->
  </div>
</div>







                    
                   
@endsection