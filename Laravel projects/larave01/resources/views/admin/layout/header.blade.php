<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo url('admin/images/fevicon.png')?>" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/bootstrap.min.css')?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/style.css')?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/responsive.css')?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/colors.css')?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo url('admin/css/bootstrap-select.css')?>" /> 
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/perfect-scrollbar.css')?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo url('admin/css/custom.css')?>" />
       <!-- font-awesome -->
      <link rel="stylesheet" href="<?php echo url('admin/css/font-awesome.min.css')?>">
       <link rel="stylesheet" href="<?php echo url('admin/css/font-awesome.css')?>">

     
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="dashboard"><img class="logo_icon img-responsive" src="<?php echo url('admin/images/logo/logo_icon.png')?>" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?php echo url('admin/images/layout_img/user_img.jpg')?>" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                  <!--   
                  <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard">> <span>Dashboard</span></a>
                           </li>

                           <li>
                              <a href="dashboard_2">> <span>Dashboard style 2</span></a>
                              
                           </li>
                          
                        </ul>
                     </li>
                            -->
                     <li>
                              <a href="dashboard"><i class="fa fa-dashboard yellow_color"> </i><span>Dashboard</span></a>
                           </li>
               
                     <li>
                        <a href="#Category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Category</span></a>
                        <ul class="collapse list-unstyled" id="Category">
                           <li><a href="manage_category">> <span>Manage Category</span></a></li>
                           <li><a href="add_category">> <span>Add Category</span></a></li>
                           
                        </ul>
                     </li>



                     <li>
                        <a href="#Product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cubes purple_color"></i> <span>Product</span></a>
                        <ul class="collapse list-unstyled" id="Product">
                           <li><a href="manage_product">> <span>Manage product</span></a></li>
                           <li><a href="add_product">> <span>Add product</span></a></li>
                          
                        </ul>
                     </li>

                       <li><a href="customer"><i class="fa fa-group "> </i><span>Customer</span></a></li>

                    
                     <li>

                        <li><a href="order"><i class="fa fa-shopping-cart purple_color"> </i><span>Order</span></a></li>

                    
                     <li>
                        <a href="contact"><i class="fa fa-phone red_color"></i> <span>Contact</span></a>
                     </li>

                      <li>
                        <a href="feedback"><i class="fa fa-envelope-o red_color"></i> <span>feedback</span></a>
                     </li>

                      <!--

                       <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email">> <span>Email</span></a></li>
                           <li><a href="calendar">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>


                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Projects</span></a>
                           </li>
                           <li>
                              <a href="login">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                      <li><a href="price"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li><a href="charts"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>

                     -->
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="dashboard"><img class="img-responsive" src="<?php echo url('admin/images/logo/logo.png')?>" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                           <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                              
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>


                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo url('admin/images/layout_img/user_img.jpg')?>" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile">My Profile</a>
                                       <a class="dropdown-item" href="settings">Settings</a>
                                       <a class="dropdown-item" href="help">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>


                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->