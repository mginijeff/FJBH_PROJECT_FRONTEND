<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="homepage" class="navbar-brand p-0">
                <img class="w-100" src="{{ URL::asset('import/assets/img/NEW.png')}}" alt="Image"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="homepage" class="nav-item nav-link active">Home</a>
                    

                    <a href="aboutus" class="nav-item nav-link">About Us</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="recruitment" class="dropdown-item">Recruitment</a>
                            <a href="training" class="dropdown-item">Training</a>
                            <a href="outsourcing" class="dropdown-item">Outsourcing</a>
                            <a href="management" class="dropdown-item">Management Consulting</a>
                            
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact us</a>
                    <a href="aboutus" class="nav-item nav-link">Login</a>
                </div>
                <button type="button" class="btn ms-3" style="color:#2BAF5C" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
               
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ URL::asset('import/assets/img/PIC 1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">We stand for</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Innovation & Creativity </h1>
                            <a href="mission" class=" py-md-3 px-md-5 me-3 animated slideInLeft" style="color: #FFFFFF; background: #2BAF5C ">Mission</a>
                            <a href="vision" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Vision</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ URL::asset('import/assets/img/PIC 3.jpg ')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">We stand for</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Customer Service Excellence</h1>
                             <a href="mission" style="color: #FFFFFF; background: #2BAF5C" class=" py-md-3 px-md-5 me-3 animated slideInLeft">Mission</a> 
      

                            <a href="vision" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Vision</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
     <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content " style="background: rgb( 241, 254, 248 );">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px; ">
                        <input type="text" class="form-control bg-transparent  p-3" style="color:#000400" placeholder="Type search keyword">
                        <button class=" px-4" style="color: #2BAF5C"><i class="bi bi-search"style="color: #2BAF5C"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> 