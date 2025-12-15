<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Acuas - Drinking Water Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo url('website/lib/animate/animate.min.css" rel="stylesheet')?>">
        <link href="<?php echo url('website/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo url('website/css/bootstrap.min.css" rel="stylesheet')?>">

        <!-- Template Stylesheet -->
        <link href="<?php echo url('website/css/style.css" rel="stylesheet')?>">
    </head>

    <body>

     

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Acuas</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index" class="nav-item nav-link">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="service" class="nav-item nav-link">Service</a>
                        <a href="blog" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature" class="dropdown-item">Our Feature</a>
                                <a href="product" class="dropdown-item">Our Product</a>
                                <a href="team" class="dropdown-item">Our Team</a>
                                <a href="testimonial" class="dropdown-item">Testimonial</a>
                                <a href="404" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contactus" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="d-none d-xl-flex me-3">
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                            <span class="text-body">Get Free Delivery</span>
                            <a href="tel:+4733378901"><span class="text-primary">Free: + 0123 456 7890</span></a>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        
                    @if(session()->has('cid'))
                            <div class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" href="#">
                                    <img class="rounded-circle me-2 border border-primary shadow-sm"
                                        src="{{ asset('upload/customer/' . Session()->get('image')) }}"
                                        alt="User" width="36" height="36" />
                                    <span class="fw-bold text">{{ Session()->get('cname') }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end shadow-lg rounded-3 p-2">
                                    <a href="my_profile" class="dropdown-item d-flex align-items-center">
                                        <i class="bi bi-person-circle me-2 text-primary"></i> My Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/web_logout" class="dropdown-item d-flex align-items-center text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Log Out
                                    </a>
                                </div>
                            </div>
                            @else
                            <a href="web_login" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4 ms-3">
                                LOG-IN
                            </a>
                            @endif


                  
                    
                </div>
            </nav>
