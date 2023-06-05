@extends('layout.main2') 
@section('content')

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold  text-uppercase" style="color:#000400">Contact Us</h5>
                <h1 class="mb-0" style="color:#2BAF5C">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class=" d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px; background:#000400">
                            <i class="fa fa-phone-alt " style="color:#EDC933"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text mb-0" style="color:#EDC933">+255 714 214 106</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class=" d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px; background:#000400">
                            <i class="fa fa-envelope-open " style="color:#EDC933"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get us</h5>
                            <h4 class="mb-0" style="color:#EDC933">fjbhrbrain@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class=" d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px; background:#000400">
                            <i class="fa fa-map-marker-alt" style="color:#EDC933"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="mb-0" style="color:#EDC933">CWT street, Plot No 275 Floor 5, Kinondoni Morrocco</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn  w-100 py-3" style="background:#2BAF5C; color:#FFFFFF" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63387.64744858431!2d39.218375741004145!3d-6.802911428097883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCWT%20street%2C%20Kinondoni%20Morrocco!5e0!3m2!1sen!2stz!4v1684455943061!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                        
                       
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection