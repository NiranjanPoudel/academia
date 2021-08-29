<!-- Start Footer -->
<footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">School of</span> <span class="text-light h5 semi-bold-600">Professional</span> <span class="text-light h5">Studies</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Advanced School Of Professional Studies
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <!-- <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                            </li> -->
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="blog.html">Blogs</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                        <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">PHP</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Android</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">.NET</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Java</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                        <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:+977 980-1066279">+977 980-1066279</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@utechitpro.com">info@utechitpro.com</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="w-100 bg-primary py-3">
                <div class="container">
                    <div class="row pt-2">
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-lg-start text-center text-light light-300">
                                © Copyright 2021 UtechItPro
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-lg-end text-center text-light light-300">
                                Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>UtechItPro</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->


        <!-- Bootstrap -->
        <script src="<?php  echo base_url('assets/frontend/');?>assets/js/bootstrap.bundle.min.js"></script>
        <!-- Load jQuery require for isotope -->
        <script src="<?php  echo base_url('assets/frontend/');?>assets/js/jquery.min.js"></script>
        <!-- Isotope -->
        <script src="<?php  echo base_url('assets/frontend/');?>assets/js/isotope.pkgd.js"></script>
        <!-- Page Script -->
        <script>
            $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
            // nav dropdown
            $('.dropdown').hover(function() {
              $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
          }, function() {
              $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
          });
                // grid
                $('.item1, .item2').hover(function(){     
                    $('.icon2', this).addClass('course-icon-hover-bottom');
                    $('.icon1', this).addClass('course-icon-hover-top');
                    $('.bx-hover1', this).addClass('bx-hover1-style');
                    $('.bx-hover2', this).addClass('bx-hover2-style');
                    $('.course-title', this).addClass('course-hover');
                },     
                function(){    
                    $('.icon2', this).removeClass('course-icon-hover-bottom');
                    $('.icon1', this).removeClass('course-icon-hover-top');
                    $('.bx-hover1', this).removeClass('bx-hover1-style');
                    $('.bx-hover2', this).removeClass('bx-hover2-style');
                    $('.course-title', this).removeClass('course-hover');
                });
            });
        </script>
        <!-- Templatemo -->
        <script src="<?php  echo base_url('assets/frontend/');?>assets/js/templatemo.js"></script>
        <!-- Custom -->
        <script src="<?php  echo base_url('assets/frontend/');?>assets/js/custom.js"></script>

    </body>

    </html>