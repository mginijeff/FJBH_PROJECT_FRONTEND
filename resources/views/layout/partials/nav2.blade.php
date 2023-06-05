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
                    <a href="login" class="nav-item nav-link">Login</a>
                </div>
                <button type="button" class="btn ms-3" style="color:#2BAF5C" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
               
            </div>
        </nav>
</div>