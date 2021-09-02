<?php include 'header.php'; ?>

 <div id="owl-demo" class="owl-carousel owl-theme">
 <?php foreach ($sliders as $key => $value): ?>
  <div class="item <?=(0==$key) ? 'active': ''?>"> <img src="<?=base_url('uploads/slider/');?><?=$value['banner_img']?>"></div>
  <?php endforeach ?>
</div>

 

  <!-- End Banner Hero -->

  <!-- Start Courses -->
  <section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Courses</h2>
        </div>


        <div class="row gy-5 g-lg-5 mb-4">

            <!-- Start Course -->
            <?php foreach ($courses as $key => $value): ?>
            <div class="col-md-4 mb-3">
                <a href="<?php  echo base_url('assets/frontend/assets');?>#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="<?php  echo base_url('uploads/course/');?><?=$value['featured_image']?>" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300"><?=$value['course_title']?></h3>
                            <p class="card-text">Duration:<?=$value['duration']?>months</p>
                            <span class="btn btn-primary btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Enrole Now</span>
                        </div>
                    </div>
                </a>
            </div><!-- End Course -->
            <?php endforeach ?>

          

        </div>
    </div>
</section>
<!-- End Courses -->

<!-- Start View Courses -->
<section class="bg-secondary view-work" style="background-color: none;">
    <img src="<?php  echo base_url('assets/frontend/');?>./assets/img/banner-bg-03.jpg">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bx-laptop bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 more-courses semi-bold-600">Our Courses</h3>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="<?php  echo base_url('assets/frontend/assets');?>#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">More Courses</a>
            </div>
        </div>
    </div>
</section>
<!-- End View Courses -->

<!-- Start Grid -->
<section class="py-5 my-5">
    <div class="ourCourses">
        <div class="container">
            <div class="row gy-5 g-lg-5 mb-4">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"> 
                    <div class="vr-c"> 
                        <div class="headerBlock"> 
                            <div class="headIcon">
                                <i class='bx bxs-graduation'></i>
                            </div> 
                            <h2>PROFESSIONAL IT COURSES</h2> 
                            <p>We provides more than 70+ Career oriented professional IT courses.</p> 
                            <div class="center-viewAll"> 
                                <a href="<?php  echo base_url('assets/frontend/assets');?>#" class="hvr-icon-wobble-horizontal"> MORE COURSES </a> 
                            </div> 
                        </div> 
                    </div> 
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

                    <div class="courses-grid"> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c">
                                        <i class='bx bxl-react bx-hover2'></i> 
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> MERN Stack Development Training </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Web Design Training </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxl-html5 bx-hover1' ></i>
                                    </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c">
                                        <i class="fab fa-php bx-hover1"></i>
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> PHP with Laravel Training </div>
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#">
                                <div class="course-title"> 
                                    <div class="vr-c"> Python &amp; Django Training </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c">
                                        <i class='bx bxl-python bx-hover2' ></i>
                                    </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c">
                                        <i class='bx bx-line-chart bx-hover1' ></i>
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Digital Marketing Training </div> 
                                </div> 
                            </a> 
                        </div>  
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class="fas fa-ethernet bx-hover1"></i>
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> ASP.NET MVC Training </div> 
                                </div> 
                            </a> 
                        </div>
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Java Training Package </div> 
                                </div>
                                <div class="course-icon-bottom icon2">
                                    <div class="vr-c"> 
                                        <i class="fab fa-java bx-hover1"></i>
                                    </div> 
                                </div> 
                            </a> 
                        </div>
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxs-check-square bx-hover1'></i> 
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> QA Training </div> 
                                </div> 
                            </a> 
                        </div>
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#">  
                                <div class="course-title"> 
                                    <div class="vr-c"> Android App Development Training </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c">
                                        <i class='bx bxl-android bx-hover1'></i>
                                    </div> 
                                </div>
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class="fas fa-palette bx-hover2"></i> 
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Graphic Design Training </div> 
                                </div> 
                            </a> 
                        </div>
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#">  
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxl-react bx-hover2'></i> 
                                    </div> 
                                </div>
                                <div class="course-title"> 
                                    <div class="vr-c"> React js Training </div> 
                                </div>
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Oracle Training </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c"> 
                                        <i class="fas fa-radiation-alt bx-hover2"></i>
                                    </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxs-bar-chart-alt-2 bx-hover1'></i>
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Accounting Training </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#">  
                                <div class="course-title"> 
                                    <div class="vr-c"> Data Science with Python </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxl-python bx-hover2' ></i> 
                                    </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class="fab fa-php bx-hover1"></i>
                                    </div> 
                                </div> 
                                <div class="course-title"> 
                                    <div class="vr-c"> PHP TRAINING </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class='bx bxl-python bx-hover2' ></i> 
                                    </div> 
                                </div>
                                <div class="course-title"> 
                                    <div class="vr-c"> Machine Learning with Python Training </div> 
                                </div>
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Advanced Excel </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c"> 
                                        <i class="fas fa-file-excel bx-hover1"></i>
                                    </div> 
                                </div> 
                            </a> 
                        </div>  
                        <div class="courses-grid-item item1"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-icon-top icon1"> 
                                    <div class="vr-c"> 
                                        <i class="fab fa-java bx-hover1"></i>
                                    </div> 
                                </div>
                                <div class="course-title"> 
                                    <div class="vr-c"> Advanced Java Training </div> 
                                </div> 
                            </a> 
                        </div> 
                        <div class="courses-grid-item item2"> 
                            <a href="<?php  echo base_url('assets/frontend/assets');?>#"> 
                                <div class="course-title"> 
                                    <div class="vr-c"> Laravel Training </div> 
                                </div>
                                <div class="course-icon-bottom icon2"> 
                                    <div class="vr-c"> 
                                        <i class="fab fa-php bx-hover1"></i>
                                    </div>
                                </div>  
                            </a> 
                        </div> 
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Grid -->

    <!-- Start Blog Banner -->
    <section class="bg-secondary view-work" style="background-color: none;">
        <img src="<?php  echo base_url('assets/frontend/');?>./assets/img/banner-bg-03.jpg">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <!-- <i class='display-1 bx bx-laptop bx-lg'></i> -->
                    <i class='display-1 bx bx-edit bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 more-courses semi-bold-600">Blogs</h3>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="<?php  echo base_url('assets/frontend/assets');?>#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">More Blogs</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Banner -->

    <!-- Start Blog -->
    <section class="container py-5 my-5">

        <div class="row projects gx-lg-5">
            <a href="<?php  echo base_url('assets/frontend/assets');?>#x" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="<?php  echo base_url('assets/frontend/');?>./assets/img/php.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-primary">Digital Marketing</h5>
                        <p class="card-text light-300 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolor.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                          Read more <i class='bx bxs-hand-right ms-1'></i>
                      </span>
                  </div>
              </div>
          </a>
          <a href="<?php  echo base_url('assets/frontend/assets');?>work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
            <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                <img class="card-img-top" src="<?php  echo base_url('assets/frontend/');?>./assets/img/java.jpeg" alt="...">
                <div class="card-body">
                    <h5 class="card-title light-300 text-primary">Why selecting a Software Development as career?</h5>
                    <p class="card-text light-300 text-dark">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <span class="text-decoration-none text-primary light-300">
                      Read more <i class='bx bxs-hand-right ms-1'></i>
                  </span>
              </div>
          </div>
      </a>
  </div>
</section>
<?php include 'footer.php'; ?>
<!-- End Blog -->