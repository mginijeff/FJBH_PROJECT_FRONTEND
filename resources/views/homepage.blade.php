 
@extends('layout.main') 
 @section('content')
 <!-- Facts Start -->
 <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn"  data-wow-delay="0.1s">
                    <div class="shadow d-flex align-items-center justify-content-center p-4" style="height: 150px; background:#2BAF5C">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users" style="color:#2BAF5C"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">4</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class=" d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px; background:#2BAF5C">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class=" mb-0" style="color:#2BAF5C">Projects Done</h5>
                            <h1 class=" mb-0" style="color:#2BAF5C" data-toggle="counter-up">5</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class=" shadow d-flex align-items-center justify-content-center p-4" style="height: 150px; background:#2BAF5C">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award" style="color:#2BAF5C"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Certificates</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">3</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-uppercase" style="color:#000400">About Us</h5>
                        <h1 class="mb-0" style="color:#2BAF5C">The best HR Service that provides you with freedom to operate your business effectively. </h1>
                    </div>
                    <p class="mb-4">FJB HR Brain Co.Ltd is to deliver qualified, well trained and experienced personnel on time for our clients in order to create and sustain superior performance for sustainable competitive advantage.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check  me-3" style="color:#EDC933"></i>Model Leadership</h5>
                            <h5 class="mb-3"><i class="fa fa-check  me-3" style="color:#EDC933"></i>Innovation & Creativity</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check  me-3" style="color:#EDC933"></i>Honest & Integrity</h5>
                            <h5 class="mb-3"><i class="fa fa-check  me-3" style="color:#EDC933"></i>Customer Service Excellence</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class=" d-flex align-items-center justify-content-center rounded" style="background:#000400; width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt " style="color:#EDC933"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class=" mb-0" style="color:#EDC933">+255 714 214 106</h4>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('import/assets/img/HR 91.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase" style="color:#000400">Why Choose Us</h5>
                <h1 class="mb-0" style="color:#2BAF5C">We help you focus on your Business, Reduce Cost and Limit Liability with HR Solutions</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class=" rounded d-flex align-items-center justify-content-center mb-3" style="background:#000400; width: 60px; height: 60px;">
                                <i class="fa fa-cubes" style="color:#EDC933"></i>
                            </div>
                            <h4 style="color:#2BAF5C">Mission</h4>
                            <p class="mb-0">To understand and tailor the needs of our clients' requirements while fostering meaningful associations and growth with people and organizations</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="background:#000400; color:#FFFFFF; width: 60px; height: 60px;">
                                <i class="fa fa-award " style="color:#EDC933"></i>
                            </div>
                            <h4 style="color:#2BAF5C">Vision</h4>
                            <p class="mb-0">To set a pace for HR solutions by being a trusted business partiner focusing on service excellence and empowering people and organizations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ URL::asset('import/assets/img/HR 92.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class=" rounded d-flex align-items-center justify-content-center mb-3" style="background:#000400; color:#FFFFFF; width: 60px; height: 60px;">
                                <i class="fa fa-users-cog" style="color:#EDC933"></i>
                            </div>
                            <h4 style="color:#2BAF5C">Business Principle</h4>
                            <p class="mb-0">FJB HR Brain Co.Ltd is to deliver qualified, well-trained and experienced personnel on time for our clients in order to create and sustain superior performance for sustainable competitive advantage.</p>
                        </div>
                        
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class=" rounded d-flex align-items-center justify-content-center mb-3" style="background:#000400; color:#FFFFFF; width: 60px; height: 60px;">
                            <i class="fa fa-gift " style="color:#EDC933"></i>
                            </div>
                            <h4 style="color:#2BAF5C">We offer you</h4>
                            <p class="mb-0">Focus on your Business, Reduced Cost and Limit Liability with HR Solutions Managed Human Resource, Payroll,Recruitment,Training and Outsourcing workforce,Labor Disputes, Management Consulting & Health and Safety Services!</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400">Our Services</h5>
                <h1 class="mb-0" style="color:#2BAF5C">We provide Better Services for you!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center wrap-content">
                        <div class="service-icon" style="background:#2BAF5C">
                        <i class="fa fa-briefcase" style="color:#FFFFFF"></i>
                        </div>
                        <h4 class="mb-3" style="color:#000400">Recruitment Services</h4>
                        <p class="m-0" style="color:#000400">We Believe Recruitment is extremely important in the company as it ensures that employees who wish to enter into the company are a perfect fit for the business </p>
                        <!-- We Believe Recruitment is extremely important in the company as it ensures that employees who wish to enter into the company are a perfect fit for the business, whilst further displaying the professionalism of the entire company as the very first moments a prospective employee wishes to onboard. Moreover,screening and vetting, employee verification, background checks, pre-screening and post screening are considered as the strategic focus on competitive advantage to make recruitment accomplished. -->
                        <a class="btn btn-lg  rounded" style="background:#2BAF5C" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon" style="background:#2BAF5C">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3" style="color:#000400">Outsourcing Services</h4>
                        <p class="m-0" style="color:#000400">Human relation(HR) is an essential part of any company. The HR function is typically responsible for almost every facet of employee management.</p>
                        <a class="btn btn-lg  rounded" style="background:#2BAF5C; color:#FFFFFF" href="">
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon" style="background:#2BAF5C; color:#FFFFFF">
                        <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h4 class="mb-3" style="color:#000400">Training Services</h4>
                        <p class="m-0" style="color:#000400">They enhance employee performance, boost employee productivity, reduce employee employee turnover and improve company culture. </p>
                        <a class="btn btn-lg  rounded" style="background:#2BAF5C; color:#FFFFFF" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" >
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" >
                        <div class="service-icon" style="background:#2BAF5C; color:#FFFFFF">
                        <i class="fa fa-clipboard-check"></i>
                        </div>
                        <h4 class="mb-3" style="color:#000400">Management Consultancy</h4>
                        <p class="m-0" style="color:#000400">We provide external,objective advice and analysis of an Institution/company that can be extremly beneficial.</p>
                        <a class="btn btn-lg  rounded" style="background:#2BAF5C; color:#FFFFFF" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
 <!-- Service End -->


    <!-- Post For Job  Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase"  style="color:#000400 ">Job Vacancies List</h5>
                <h1 class="mb-0"  style="color:#2BAF5C ">We are Offering Different Job Posts on different Institutes/Organization</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class=" mb-1"  style="color:#000400">Organization: </h4>
                            <small class="text-uppercase"  style="color:#000400 ">Date: </small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-2"><span></span></div>
                            <a href="" class="py-2 px-4 mt-4"  style="background:#000400; color:#EDC933">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class=" mb-1"  style="color:#000400 ">Organization:</h4>
                            <small class="text-uppercase"  style="color:#000400 ">Date:</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-2"><span></span></div>
                            <a href="" class="py-2 px-4 mt-4"  style="background:#000400; color:#EDC933 ">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="mb-1"  style="color:#000400 ">Organization:</h4>
                            <small class="text-uppercase"  style="color:#000400">Date:</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-3"><span></span></div>
                            <div class="d-flex justify-content-between mb-2"><span></span></div>
                            <a href="" class="py-2 px-4 mt-4"  style="background:#000400; color:#EDC933">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Post for Job End -->


    <!-- Comments Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-uppercase" style="color:#000400">Comments to us</h5>
                        <h1 class="mb-0" style="color:#2BAF5C">Do you have any comments to us? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply  me-3" style="background:#FFFFFF; color:#EDC933"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt  me-3" style="background:#FFFFFF; color:#EDC933"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class=" d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px; background:#000400">
                            <i class="fa fa-phone-alt" style="color:#EDC933"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="mb-0" style="color:#EDC933">+255 714 214 106</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="rounded h-100 d-flex align-items-center p-5 wow zoomIn" style="background: #000400" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px">
                                </div>
                                <div class="col-12">
                                    <input type="phone" class="form-control bg-light border-0" placeholder="Your phone number" style="height: 55px">
                                </div>
                                
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12" >
                                    <button class=" w-100 py-3"style="background:#EDC933" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400 ">Team Members</h5>
                <h1 class="mb-0" style="color:#2BAF5C ">Professional Stuffs Ready to Help You!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('import/assets/img/Team.jpeg ')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-twitter fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-facebook-f fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-instagram fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded"style="background:#2BAF5C " href=""><i class="fab fa-linkedin-in fw-normal" style="color:#FFFFFF"></i></a>
                            </div>

                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color:#2BAF5C ">Full Name</h4>
                            <p class="text-uppercase m-0" style="color:#000400 ">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('import/assets/img/Team.jpeg ')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-twitter fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-facebook-f fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-instagram fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded"style="background:#2BAF5C " href=""><i class="fab fa-linkedin-in fw-normal" style="color:#FFFFFF"></i></a>
                            </div>

                        </div>
                        <div class="text-center py-4">
                        <h4 class="" style="color:#2BAF5C ">Full Name</h4>
                        <p class="text-uppercase m-0" style="color:#000400 ">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('import/assets/img/Team.jpeg ')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-twitter fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-facebook-f fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded" style="background:#2BAF5C " href=""><i class="fab fa-instagram fw-normal" style="color:#FFFFFF"></i></a>
                                <a class="btn btn-lg  btn-lg-square rounded"style="background:#2BAF5C " href=""><i class="fab fa-linkedin-in fw-normal" style="color:#FFFFFF"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                        <h4 class="" style="color:#2BAF5C ">Full Name</h4>
                        <p class="text-uppercase m-0" style="color:#000400 ">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection