<?php
if(isset($_SESSION['a_id']))
{
  
}
else
{
  echo "<script>
      window.location='admin-login';
  </script>";
}
?>

<!doctype html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SwayamTach Admin Panle </title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png"><!--header logo--> 
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>





<body>


  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    
    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
     <!--body (WP) logo-->    <a class="d-flex justify-content-center" href="dashboard"> <img src="assets/images/logos/logo-wrappixel.svg" alt="" width="150"></a>

        
      </div>

      <div class="d-lg-flex align-items-center gap-2">
        <h3 class="text-white mb-2 mb-lg-0 fs-5 text-center">Welcome To SwayamTeach</h3>
         <a  href="#"> <button type="button"  class="btn btn-success">View The Website</button></a>

        <div class="d-flex align-items-center justify-content-center gap-2">
          
         
        </div>
      </div>

    </div>
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="assets/images/logos/St1.png" alt="" > <!--logo are here-->
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./dashboard" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="customer" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Customer</span>
                </div>
                
              </a>
            </li>
           
			<li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="contect" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Contact</span>
                </div>
                
              </a>
            </li>
			
			
			<li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="manage_order" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Orders</span>
                </div>
                
              </a>
            </li>
			
		
			<li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="cart" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                  <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Cart</span>
                </div>
                
              </a>
            </li>
			
			
	<!---Sevice-->	
					<li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">Sevice</span>
                </div>
                </a>

              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="add_service">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Add Sevice</span>
                    </div>
                    
                  </a>

                  <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="manage_service">
                <div class="d-flex align-items-center gap-3">
                <div class="round-16 d-flex align-items-center justify-content-center">
                <i class="ti ti-circle"></i>
               </div>
              <span class="hide-menu">Manage Sevice</span>
              </div>
				    	</a>
				    	</ul>
			    		</li>
		      	</li>
					</li>

		
			
	<!--Categories-->

			<li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">Categories</span>
                </div>
                </a>

              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="add_categories">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Add Categories</span>
                    </div>
                    
                  </a>
                  

                       <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                   href="manage_categories" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Manage Categories</span>
                    </div>
                    </a>
                    </ul>
                    </li>
                </li>


					</li>

           <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="feedback" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Feedback</span>
                </div>
                
              </a>
            </li>
					
                

        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->