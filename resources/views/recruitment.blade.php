@extends('layout.main2') 
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Recruitment</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">We are Transparent to provide you a Recruitment Service </h1>
            </div>
            <div class="row g-5">
            <div class="card w-75 mx-auto shadow bg-light rounded" style="color: #000400">
  <div class="card-body">
    <p class="card-text">
      We believe Recruitment is extremely important in the company as it ensures that employees who 
      wish to enter into the company are a perfect fit for the business while further displaying the
      professionalism of the entire company at the very first moments a prospective employee wishes to 
      onboard. Moreover, screening and vetting, employee verification, background checks, pre-screening
      are considered as the strategic focus on a competitive advantage to make recruitment accomplished.
    </p>
  </div>
</div>




            </div>
</div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Job List</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">We are Transparent to provide you a Recruitment Service </h1>
            </div>
            <div class="row g-5">
            <div class="input-group input-group-sm justify-content-end">
  <input type="text" class="form-control" style="max-width: 200px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);" placeholder="Search for Job" aria-label="Search" aria-describedby="search-button">
  <button class="btn" style="background: #2BAF5C" type="button" id="search-button">
    <i class="bi bi-search" style="color: #FFFFFF;"></i>
  </button>
</div>



<div class="card-container" style="display: flex; justify-content: center;">
<div class="outer-card bg-light rounded d-flex flex-column" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; border-radius: 10px; margin: 0 10px; color: #000400" > 
   <div class="inner-card" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px; width: 80px; border-radius: 5px; background:#FFFFFF">
      <img src="{{ URL::asset('import/assets/img/situs.png')}}" alt="Logo" style="max-width: 50px; ">
    </div>
    <h4>SITUS:</h4>
    <p>Job Title: Marketing Manager</p>
    <a href="login.blade.php" class="apply-button" style="display: inline-block; background-color: #2BAF5C; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-size: 12px; margin-top: 10px;">Apply</a>
    <br/>
    <br/>
    <p>Job Description here</p>
    <br/>
    <div class="details">
      <p>Date, Month, and Year uploaded</p>
    </div>
  </div>

  <div class="outer-card bg-light rounded d-flex flex-column" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; border-radius: 10px; margin: 0 10px; color: #000400">   
   <div class="inner-card" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px; width: 80px; border-radius: 5px; background:#FFFFFF">
      <img src="{{ URL::asset('import/assets/img/situs.png')}}" alt="Logo" style="max-width: 50px;">
    </div>
    <h4>SITUS:</h4>
    <p>Job Title: Marketing Manager</p>
    <a href="login.blade.php" class="apply-button" style="display: inline-block; background-color: #2BAF5C; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-size: 12px; margin-top: 10px;">Apply</a>
    <br/>
    <br/>
    <p>Job Description here</p>
    <br/>
    <div class="details">
      <p>Date, Month, and Year uploaded</p>
    </div>
  </div>

  <div class="outer-card bg-light rounded d-flex flex-column" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; border-radius: 10px; margin: 0 10px; color: #000400">   
   <div class="inner-card" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px; width: 80px; border-radius: 5px; background:#FFFFFF">
      <img src="{{ URL::asset('import/assets/img/situs.png')}}" alt="Logo" style="max-width: 50px;">
    </div>
    <h4>SITUS:</h4>
    <p>Job Title: Marketing Manager</p>
    <a href="login.blade.php" class="apply-button" style="display: inline-block; background-color: #2BAF5C; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-size: 12px; margin-top: 10px;">Apply</a>
    <br/>
    <br/>
    <p>Job Description here</p>
    <br/>
    <div class="details">
      <p>Date, Month, and Year uploaded</p>
    </div>
  </div>

  <div class="outer-card bg-light rounded d-flex flex-column" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; border-radius: 10px; margin: 0 10px; color: #000400">
    <div class="inner-card" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px; width: 80px; border-radius: 5px; background:#FFFFFF">
      <img src="{{ URL::asset('import/assets/img/situs.png')}}" alt="Logo" style="max-width: 50px;">
    </div>
    <h4>SITUS:</h4>
    <p>Job Title: Marketing Manager</p>
    <a href="login.blade.php" class="apply-button" style="display: inline-block; background-color: #2BAF5C; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-size: 12px; margin-top: 10px;">Apply</a>
    <br/>
    <br/>
    <p>Job Description here</p>
    <br/>
    <div class="details">
      <p>Date, Month, and Year uploaded</p>
    </div>
  </div>
</div>


@endsection
