


<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>Swayam Tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
<!-- profile scc -->
      <style>
    .popup-card {
      width: 320px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      padding: 1rem;
      position: absolute;
      top: 80px;
      right: 20px;
      background-color: #fff;
      z-index: 999;
    }
    .avatar {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      object-fit: cover;
    }
    .email-text {
      font-size: 0.9rem;
      color: #555;
    }
    .btn-block {
      width: 100%;
      margin-bottom: 0.5rem;
    }
  </style>
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>23,RTO ROAD, VASTRAL, AHMEDABAD. </small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 9998 088 270</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>swayamtech@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
	
	 <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="./index" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Swayam Tech</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index" class="nav-item nav-link">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="service" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog" class="dropdown-item">Blog Grid</a>
                            <a href="detail" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price" class="dropdown-item">Pricing Plan</a>
                            <a href="feature" class="dropdown-item">Our features</a>
                            <a href="team" class="dropdown-item">Team Members</a>
                            <a href="testimonial" class="dropdown-item">Testimonial</a>
                            <a href="quote" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                     </div>
                      <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>

                    <!-- after login logic -->
                               


                                  <?php
                                 if (isset($_SESSION['u_id'])) {
                                   ?>
                            

                                    <!-- Trigger Button -->
                                    <div class="text-end p-3">
                                    <button class="btn btn-primary py-2 px-4 ms-3" onmouseup="togglePopup()">Profile</button>
                                    </div>

                                    <!-- Profile Pop-Up -->

                                    <?php
                                        if (session_status() === PHP_SESSION_NONE) {
                                            session_start();
                                        }

                                        $fetch = null;
                                        $imagePath = "assets/images/default-avatar.png";

                                        if (isset($_SESSION['u_id'])) {
                                            include_once('model.php');
                                            $model = new model();
                                            $arr = array("id" => $_SESSION['u_id']);
                                            $run = $model->select_where('customers', $arr);
                                            $fetch = $run->fetch_object();

                                            if (!empty($fetch->image)) {
                                                $imagePath = "assets/images/customers/" . $fetch->image;
                                            }
                                        }
                                        ?>
                                    <div id="profilePopup" class="popup-card d-none">
                                    <div class="text-center">
                                    <!--user img-->
                                    <?php
                                     $imagePath = !empty($fetch->image) ? "assets/images/customers/" . $fetch->image : "assets/images/default-avatar.png";
                                     ?>
                                    <img src="<?php echo $imagePath; ?>" alt="Avatar" class="avatar mb-2">


                                        <h6 class="mb-0"><?php echo  $_SESSION['u_name']?></h6>
                                        <div class="email-text mb-3"><?php echo  $_SESSION['u_email']?></div>
                                    </div>
                                    <div>
                                        
                                        <a href="my_profile" class="btn btn-outline-secondary btn-sm btn-block">Manage your Account</a>
                                        <a href="order" class="btn btn-outline-secondary btn-sm btn-block">My Order</a>
                                        <a href="logout" class="btn btn-outline-danger btn-sm btn-block">Logout</a>
                                       <!--- <hr>
                                        <button class="btn btn-light btn-sm btn-block">Add another account</button>
                                        <button class="btn btn-light btn-sm btn-block">Open Guest Window</button>
                                    </div>
                                    </div>
                                    --->

                                    <script>
                                    function togglePopup() {
                                        const popup = document.getElementById("profilePopup");
                                        popup.classList.toggle("d-none");
                                    }
                                    </script>

                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                               

                            <?php
                            } else {
                            ?>
                
                              <a href="login" class="btn btn-primary py-2 px-4 ms-3">LOGIN</a>
                            <?php
                            }
                            ?>
               


                
             </div>  

                
				
            </div>
        </nav>
        </div>  

       
                         
                         