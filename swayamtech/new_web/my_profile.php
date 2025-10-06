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
 <style>
    .profile-card {
      max-width: 360px;
      margin: 40px auto;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .profile-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fff;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      margin-top: 10px;
    }
    .form-label {
      font-size: 0.85rem;
    }
    .form-control-sm {
      font-size: 0.85rem;
      padding: 0.25rem 0.5rem;
    }
    .btn-sm {
      font-size: 0.8rem;
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
                    
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->
	
	 <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Swayam Teach</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
           <div class="collapse navbar-collapse" >
                <div class="navbar-nav ms-auto py-0">
                   
                   
				
            </div>
     </nav>
   


      

      <!-- Tab Content -->
      <div class="tab-content" id="formTabsContent">


<br>
<br>
<br>
<br>
      <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>Wellcome To SwayamTeach</h4>
            <h1>Your Profile,</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="card profile-card text-center">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-1">My Profile</h5>
    <img src="assets/images/customers/<?php echo $fetch->image;?>" alt="Profile Image" class="profile-img mx-auto">
    <div class="mt-2">
      <h6 >Profile Photo </h6>
    </div>
  </div>

  <div class="card-body px-3">
    <form id="profileForm">
      <div class="mb-2 text-start">
       <h6 class="form-control">USER-ID : <?php echo $fetch->id?> </h6>
      </div>
      <div class="mb-2 text-start">
         <h6 class="form-control">NAME : <?php echo $fetch->cust_name?> </h6>
      </div>
      <div class="mb-2 text-start">
        <h6 class="form-control">EMAIL : <?php echo $fetch->email?> </h6>
      </div>
      <div class="mb-2 text-start">
        <h6 class="form-control">MOBILE : <?php echo $fetch->mobile?> </h6>
      </div>
          <!-- <div class="mb-2 text-start">
              <h6 class="form-control">GENDER : <?php echo $fetch->mobile?> </h6>
            </div>
        -->

        <div class="d-flex justify-content-center gap-2 mt-3">
          <a class="btn btn-success" href="edit_profile?edt_profile=<?php echo $fetch->id?>">Edit Profile</a>
          <a class="btn btn-success " href="index">Back To Home</a>
        </div>
      
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>