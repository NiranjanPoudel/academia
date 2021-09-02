<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advance School of Professional Studies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon"  href="<?php  echo base_url('assets/frontend/');?>assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon"  href="<?php  echo base_url('assets/frontend/');?>assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link  href="<?php  echo base_url('assets/frontend/');?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link  href="<?php  echo base_url('assets/frontend/');?>assets/css/boxicon.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet"  href="<?php  echo base_url('assets/frontend/');?>assets/css/style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet"  href="<?php  echo base_url('assets/frontend/');?>assets/css/responsive.css">
    <!-- Owl Carousel Assets -->
    <link  href="<?php  echo base_url('assets/frontend/');?>assets/css/owl.carousel.css" rel="stylesheet">
    <link  href="<?php  echo base_url('assets/frontend/');?>assets/css/owl.theme.css" rel="stylesheet">
    <link  href="<?php  echo base_url('assets/frontend/');?>assets/css/custom.css" rel="stylesheet">
</head>

<body>
     <!--Preloader area start here-->
   <div id="loader" class="loader orange-color">
      <div class="loader-container">
      <!-- <div class='loader-icon'>
        <img src="./assets/img/net.png" alt="">
    </div> -->
</div>
</div>
<!--Preloader area End here-->
<!--Full width header Start-->
<div class="full-width-header header-style1 home1-modifiy">

  <!--Header Start-->
  <header id="rs-header" class="rs-header">

     <!-- Menu Start -->
     <div class="menu-area menu-sticky ttm-stickable-header">
        <div class="container">
           <div class="row y-middle">
              <div class="col-lg-2 col-2">
                 <div class="logo-cat-wrap">
                    <div class="logo-part">
                       <a href="<?php  echo base_url('index');?>">
                       <?php foreach($site as $key => $value): ?> 
                          <img src = "<?php  echo base_url('uploads/site/');?><?= $value['site_logo'] ?>">
                         <?php endforeach ?> 
                      </a>
                  </div>
              </div>
          </div>

          <div class="col-lg-10 col-10 text-right">
             <div class="rs-menu-area">
                <div class="main-menu">
                   <div class="mobile-menu">
                      <a class="rs-menu-toggle">
                         <i class="fa fa-bars"></i>
                     </a>
                 </div>

                 <nav class="rs-menu">
                    <ul class="nav-menu">

                       <li class="rs-mega-menu mega-rs current-menu-item"> 
                          <a href="<?php  echo base_url('index');?>">Home</a>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="<?php  echo base_url('assets/frontend/');?>javascript:" style="color:#ff5200!important">Courses</a>

                        <ul class="sub-menu">


                         <li class="menu-item-has-children right">
                            <a href="<?php  echo base_url('assets/frontend/');?>javascript:">PHP</a>

                            <ul class="sub-menu right">


                               <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Laravel Training</a></li>
                               <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Advanced PHP Training</a></li>
                               <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">PHP With Laravel</a></li>
                               <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Laravel With Vue js</a></li>


                           </ul>
                       </li>

                       <li class="menu-item-has-children right">
                          <a href="<?php  echo base_url('assets/frontend/');?>javascript:">PHP</a>

                          <ul class="sub-menu right">


                             <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Laravel Training</a></li>
                             <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Advanced PHP Training</a></li>
                             <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">PHP With Laravel</a></li>
                             <li><a href="<?php  echo base_url('assets/frontend/');?>./course-single1.html">Laravel With Vue js</a></li>


                         </ul>
                     </li>

                     <li class="menu-item-has-children right">
                        <a href="<?php  echo base_url('assets/frontend/');?>javascript:">PHP</a>

                        <ul class="sub-menu right">


                           <li><a href="<?php  echo base_url('assets/frontend/');?>#">Laravel Training</a></li>
                           <li><a href="<?php  echo base_url('assets/frontend/');?>#">Advanced PHP Training</a></li>
                           <li><a href="<?php  echo base_url('assets/frontend/');?>#">PHP With Laravel</a></li>
                           <li><a href="<?php  echo base_url('assets/frontend/');?>#">Laravel With Vue js</a></li>


                       </ul>
                   </li>

               </ul>
           </li>


           <li class="rs-mega-menu mega-rs current-menu-item"> <a href="<?php  echo base_url('blog');?>">Blogs</a>
           </li>

           <li class="rs-mega-menu mega-rs current-menu-item"> 
              <a href="<?php  echo base_url('pricing');?>">Payment</a>
          </li>

          <li class="rs-mega-menu mega-rs current-menu-item"> 
              <a href="<?php  echo base_url('contact');?>">Contact</a>
          </li>

      </ul> 
  </nav>                                         
</div>                                
</div>
</div>

</div>
</div>
</div>
<!-- Menu End --> 

</header>
<!--Header End-->