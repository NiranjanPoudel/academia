$(window).load(function() {
                    //preloader
                    $("#loader").delay(1000).fadeOut(500);

                // Owl Carousel
                $("#owl-demo").owlCarousel({

                  navigation : false, // Show next and prev buttons

                  slideSpeed : 300,
                  paginationSpeed : 400,

                  items : 1, 
                  itemsDesktop : true,
                  itemsDesktopSmall : true,
                  itemsTablet: true,
                  itemsMobile : true

              });

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

            // Course Tabs
            $('#myTab a').on('click', function (event) {
              event.preventDefault()
              $(this).tab('show')
          })

            // Slide
            $('.templatemo-slide-link').click(function() {
              var this_href = $(this).attr('href');
              $('#templatemo-slide-link-target img').attr('src', this_href);
              return false;
          });
            // End Slide
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