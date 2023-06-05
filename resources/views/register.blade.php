@extends('layout.main2') 
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color: #000400">Registration</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">Register your details here </h1>
                
            </div>
            <div class=" container  card shadow d-flex align-items-center justify-content-center bg-light" style="width:400px;">
<!-- <div class="card shadow" style="width:400px;" > -->
  <div class="card-body">
    <h5 class="card-title">Registration</h5>
    <form>
      <div class="mb-3">
        <label for="firstName" class="form-label" style="color:#000400">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
      </div>
      <div class="mb-3">
        <label for="middleName" class="form-label" style="color:#000400">Middle Name</label>
        <input type="text" class="form-control" id="middleName" placeholder="Enter your middle name">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label" style="color:#000400">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
      </div>
      <div class="mb-3">
        <label for="phoneNumber" class="form-label" style="color:#000400">Phone Number</label>
        <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
      </div>
      <div class="mb-3">
        <label class="form-label" style="color:#000400">Gender</label>
        <div class="form-check">
          <input class="form-check-input"  type="radio" name="gender" id="female" value="female">
          <label class="form-check-label" for="female" style="color:#000400">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input "  type="radio" name="gender" id="male" value="male">
          <label class="form-check-label" for="male" style="color:#000400">
            Male
          </label>
        </div>
      </div>
      <div class="mb-3">
        <label for="educationLevel" class="form-label" style="color:#000400">Education Level</label>
        <select class="form-select" id="educationLevel">
          <option selected disabled>Select your education level</option>
          <option value="certificate">Certificate</option>
          <option value="diploma">Diploma</option>
          <option value="degree">Degree</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" style="background:#2BAF5C; color:#FFFFFF">Submit</button>
    </form>
    <p class="text-center mt-3" style="color:#000400">Already have an account? <a href="login" style="color:#2BAF5C; ">Login here</a></p>
  </div>
</div>  
        </div>
</div>


@endsection