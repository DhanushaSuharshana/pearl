
<!DOCTYPE html>
<?php
include_once (dirname(__FILE__) . '/class/include.php');
$WELCOME_IMAGE_AND_TEXT = new Page(4);
$WELCOME_DESCRIPTION = new Page(5);
$HOW_TO_DIVE = new Page(6);
$GALLERY_OBJ = new AlbumPhoto(NULL);
$GALLERY = $GALLERY_OBJ->getAlbumPhotosById(2);
?>
<html lang="en" dir="ltr"> 
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pearl Divers Sri Lanka</title>

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">

        <!-- Fonts URL -->
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CUbuntu:400,500,700&amp;display=swap" rel="stylesheet">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/hover-min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/scubo-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>
        <div class="preloader">
            <img src="assets/images/preload.PNG" width="150px" class="preloader__image" alt="">
        </div><!-- /.preloader -->
        <div class="page-wrapper">

            <?php
            include './header.php';
            ?>

            <div class="slider-one__wrapper">
                <div class="slider-one">
                    <div class="slider-one__carousel thm__owl-dot-1 owl-carousel owl-theme thm__owl-carousel" data-carousel-prev-btn=".slider-one__nav-right" data-carousel-next-btn=".slider-one__nav-left" data-options='{"loop": true, "items": 1, "margin": 0, "dots": true, "nav": false, "animateOut": &quot;slideOutDown&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
                        <?php
                        $SLIDER_OBJ = new Slider(NULL);
                        $SLIDER = $SLIDER_OBJ->all();
                        foreach ($SLIDER as $key => $slider) {
                            ?>
                            <div class="item slider-one__slide-1" style="background-image: url(upload/slider/<?php echo $slider['image_name']; ?>);">
                                <div class="container">
                                    <div class="slider-one__content text-center">
                                        <p class="anim-elm"><?php echo $slider['description']; ?></p>
                                        <h3 class="anim-elm"><?php echo $slider['title']; ?></h3>

                                    </div><!-- /.slider-one__content text-center -->
                                </div><!-- /.container -->
                            </div><!-- /.item -->
                            <?php
                        }
                        ?>

                    </div><!-- /.slider-one__carousel -->
                    <div class="slider-one__nav">
                        <a href="#" class="slider-one__nav-left"><i class="fa fa-angle-right"></i></a>
                        <!-- /.slider-one__nav-left -->
                        <a href="#" class="slider-one__nav-right"><i class="fa fa-angle-left"></i></a>
                        <!-- /.slider-one__nav-right -->
                    </div><!-- /.slider-one__nav -->
                </div><!-- /.slider-one -->
            </div><!-- /.slider-one__wrapper -->


            <section class="cta-two">
                <div class="cta-two__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
                <!-- /.cta-two__bg -->
                <div class="container">
<!--                    <img src="assets/images/shapes/padi.png" alt="" class="cta-two__moc">-->
                    <div class="col-md-6 col-sm-6">
                        <img src="assets/images/shapes/logo.png" alt="" style="width: 100%">
                    </div>

                    <div class="col-md-2 col-sm-2">
                        <div class="certified-logo">
                            <img src="assets/images/shapes/PADI-5-stars.jpg" alt="" class="text-center" style="width: 160px">
                        </div>
                    </div><!-- /.cta-two__btn-block -->
                </div><!-- /.container -->
            </section><!-- /.cta-two -->

            <div class="cta-three__feature">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cta-three__feature-box">
                                <h3>UNAWATUNA  -  November  to  April<br> Southern  Coast  Diving</h3> 
                                <a href="#" class="thm-btn2">Visit Now</a>
                            </div><!-- /.cta-three__feature-box -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-6">
                            <div class="cta-three__feature-box">
                                <h3>TRINCOMALEE  -  April  to  October <br> North-East  coast  Diving</h3> 
                                <a href="#" class="thm-btn2">Visit Now</a>
                            </div><!-- /.cta-three__feature-box -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.cta-three__feature -->
            <section class="about-three">

                <!-- about fishes -->
                <img src="assets/images/shapes/fish-about-3-1.png" alt="" class="about-three__fish-1">
                <img src="assets/images/shapes/fish-about-3-2.png" alt="" class="about-three__fish-2">

                <!-- about trees -->
                <img src="assets/images/shapes/tree-about-3-1.png" class="about-three__tree-1" alt="">
                <img src="assets/images/shapes/tree-about-3-2.png" class="about-three__tree-2" alt="">
                <div class="container">
                    <div class="about-three__floated-text">SCUBO</div><!-- /.about-three__floated-text -->
                    <img src="assets/images/shapes/ribbon-2.png" alt="" class="about-three__moc">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-three__image">
                                <img src="assets/images/resources/about-1-1.jpg" alt="">
                                <div class="about-three__image-content">
                                    <?php echo $WELCOME_IMAGE_AND_TEXT->description; ?>
                                </div><!-- /.about-three__image-content -->
                            </div><!-- /.about-three__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="about-three__content">
                                <div class="block-title text-left">
                                    <img src="assets/images/shapes/sec-line-1.png" alt="">
                                    <p class="text-uppercase">Our Introduction </p>
                                    <h3 class="text-uppercase">Welcome to <br> Scuba Diving Center</h3>
                                </div><!-- /.block-title -->
                                <p><?php echo $WELCOME_DESCRIPTION->description; ?></p>
                                <div class="topbar-one__social" style="margin-top: 20px; margin-bottom: 20px">
                                    <a href="#"><img width="40px" src="https://www.pearldivers.lk/images/facebook.png"></a>
                                    <a href="#"><img width="40px" src="https://www.pearldivers.lk/images/instagram.png"></a>
                                    <a href="#"><img width="40px" src="https://www.pearldivers.lk/images/twitter.png"></a>
                                    <a href="#"><img width="40px" src="https://www.pearldivers.lk/images/wechat.png"></a>
                                </div>
                                <!--                                <ul class="list-unstyled about-three__list">
                                        <li><i class="fa fa-angle-right"></i> Lorem Ipsum is not simply text.</li>
                                        <li><i class="fa fa-angle-right"></i> If you are to use a passage.</li>
                                        <li><i class="fa fa-angle-right"></i> Various versions evolved.</li>
                                        <li><i class="fa fa-angle-right"></i> If Majority over the years.</li>
                                    </ul> /.list-unstyled about-three__list -->

                                <p>Hot Line: <a href="tel:+ 94 91 22 42015">+ 94 91 22 42015</a></p>
                                <p>Mobile 1: <a href="tel:+ 94 727 90 34 30">+ 94 727 90 34 30</a></p>
                                <p>Mobile 2: <a href="tel:+ 94 777 90 34 30">+ 94 777 90 34 30</a></p>

                                <a href="about-pearl-drivers.php" class="about-three__btn thm-btn">About Us</a> 
                            </div><!-- /.about-three__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.about-three -->

            <section class="video-two" style="background-image: url(assets/images/shapes/video-2-bg.png);">
                <img src="assets/images/shapes/swimmer-1-1.png" class="video-two__swimmer" alt="">
                <div class="container">
                    <div class="video-two__box wow fadeInRight" data-wow-duration="1500ms">
                        <img src="assets/images/resources/video-1-1.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=mjV3WHgF1V8" class="video-popup"><i class="fa fa-play"></i></a>
                        <!-- /.video-popup -->
                    </div><!-- /.video-two__box -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="video-two__content">
                                <div class="block-title">
                                    <img src="assets/images/shapes/sec-line-1.png" alt="">
                                    <p class="text-uppercase">learn with us</p>
                                    <h3 class="text-uppercase">How to dive?</h3>
                                </div><!-- /.block-title -->
                                <p><?php echo $HOW_TO_DIVE->description; ?></p>
                                <a href="pearl-drivers-contact.php" class="thm-btn video-two__btn">Contact us</a>
                                <!-- /.thm-btn video-two__btn -->
                            </div><!-- /.video-two__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.video-two -->

            <section class="course-one__title">
                <div class="course-one__bg" style="background-image: url(assets/images/shapes/water-wave-bg.png);"></div>
                <!-- /.course-one__bg -->
                <div class="container ">
                    <div class="block-title text-left">
                        <img src="assets/images/shapes/sec-line-1.png" alt="">
                        <p class="text-uppercase">All Courses list</p>
                        <h3 class="text-uppercase">Checkout our <br> Popular courses</h3>
                    </div><!-- /.block-title -->
                    <div class="text-block">
                        <p class="m-0">There are many variations of passages of available but the majority have suffered <br>
                            alteration in some form, by injected or randomised words which don look even <br> slightly believable.
                        </p>
                    </div><!-- /.text-block -->
                </div><!-- /.container -->
            </section><!-- /.course-one__title -->


            <div class="course-one course-one__carousel-wrapper">
                <!-- footer fishes -->
                <img src="assets/images/shapes/fish-1-1.png" alt="" class="site-footer__fish-1">

                <!-- footer trees -->
                <img src="assets/images/shapes/tree-1-1.png" class="site-footer__tree-1" alt="">
                <div class="container">
                    <div class="course-one__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{"loop": true,"items": 3, "margin":30, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "nav": false, "dots": false, "responsive": { "0": {"items": 1}, "767": {"items": 2}, "991": {"items": 2}, "1199": { "items": 3} }}' data-carousel-prev-btn=".course-one__carousel-btn-left" data-carousel-next-btn=".course-one__carousel-btn-right">
                      <?php
                      $COURSE_OBJ =new Room(NULL);
                      $COURSE =$COURSE_OBJ->all();
                      foreach ($COURSE as $course){
                      ?>
                        <div class="item">
                            <div class="course-one__single">
                                <div class="course-one__image">
                                    <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>" class="course-one__cat">advanced</a>
                                    <div class="course-one__image-inner">
                                        <img src="upload/room/<?php echo $course['image_name'];?>" alt="">
                                        <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"><i class="scubo-icon-plus-symbol"></i></a>
                                    </div><!-- /.course-one__image-inner -->
                                </div><!-- /.course-one__image -->
                                <div class="course-one__content hvr-sweep-to-bottom">
                                    
                                        <h3>  <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"><?php echo $course['title'];?></a></h3>
                                  <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>">  <p><?php echo substr($course['description'], 0, 120).'......';?></p>
                                    </a>
                                </div><!-- /.course-one__content -->
                                <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>" class="course-one__book-link">View this course</a>
                            </div><!-- /.course-one__single -->
                           
                        </div><!-- /.item -->
                      <?php
                      
                      }
                      ?>
                    </div><!-- /.course-one__carousel thm__owl-carousel owl-carousel owl-theme -->

                    <div class="course-one__carousel-btn__wrapper">
                        <a class="course-one__carousel-btn-left" href="#"><i class="fa fa-angle-left"></i></a>
                        <a class="course-one__carousel-btn-right" href="#"><i class="fa fa-angle-right"></i></a>
                    </div><!-- /.course-one__carousel-btn__wrapper -->
                </div><!-- /.container -->
            </div><!-- /.course-one__carousel-wrapper -->
            <section class="cta-five">
                <div class="cta-five__bg" style="background-image: url(assets/images/background/cta-5-1-bg.jpg);"></div><!-- /.cta-five__bg -->
                <div class="container">
                    <div class="cta-five__box-wrap wow fadeInUp" data-wow-duration="1500ms">
                        <div class="cta-five__box">
                            <i class="scubo-icon-aqualung"></i>
                            <h3><a href="#">Discover a <br> whole new world</a></h3>
                        </div><!-- /.cta-five__box -->
                        <div class="cta-five__box">
                            <i class="scubo-icon-scuba"></i>
                            <h3><a href="#">Begin underwater <br> adventure</a></h3>
                        </div><!-- /.cta-five__box -->
                        <div class="cta-five__box">
                            <i class="scubo-icon-snorkel"></i>
                            <h3><a href="#">TAKE YOUR DIVE TO <br> THE NEXT LEVEL</a></h3>
                        </div><!-- /.cta-five__box -->
                    </div><!-- /.cta-five__box-wrap -->
                    <div class="cta-five__content">
                        <div class="block-title text-left">
                            <img src="assets/images/shapes/sec-line-1.png" alt="">
                            <p class="text-uppercase">Join And get some benefits</p>
                            <h3 class="text-uppercase">We seek adventure where <br> others only dream</h3>
                        </div><!-- /.block-title -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable.</p>
                        <a href="" class="thm-btn cta-five__btn">Start with us now</a><!-- /.thm-btn -->
                    </div><!-- /.cta-five__content -->
                </div><!-- /.container -->
            </section><!-- /.cta-five -->









            <section class="testimonials-one__title testimonials-one__title__home-one">
                <div class="testimonials-one__bg" style="background-image: url(assets/images/shapes/water-wave-bg.png);"></div>
                <!-- /.testimonials-one__bg -->

                <div class="container ">
                    <div class="row">
                    <div class="col-xl-8 col-md-6 col-xs-12">
                    <div class="block-title text-left">
                        <img src="assets/images/shapes/sec-line-1.png" alt="">
                        <p class="text-uppercase">Testimonials</p>
                        <h3 class="text-uppercase">What they say</h3>
                    </div><!-- /.block-title -->
                    <div class="text-block">
                        <p class="m-0">There are many variations of passages of available but the majority have suffered <br>
                            alteration in some form, by injected or randomised words which don look even <br> slightly believable.
                        </p>
                    </div><!-- /.text-block -->
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                    <div class="block-title text-right">
                        <a href="pearl-divers-testimonial.php" class="thm-btn cta-five__btn">View more</a>
                    </div>
                    </div>
                    </div>
                        <!-- /.block-title -->
                </div><!-- /.container -->
            </section><!-- /.testimonials-one__title -->


            <section class="testimonials-one__carousel-wrapper testimonials-one__carousel-wrapper__home-one">
                <div class="container wow fadeIn" data-wow-duration="2000ms">
                    <div class="testimonials-one__carousel owl-carousel owl-theme thm__owl-carousel thm__owl-dot-2" data-options='{"items": 3, "margin": 30, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "smartSpeed": 700, "responsive": {"0": {"items": 1, "dots": false, "nav": true}, "480": {"items": 1, "dots": false, "nav": true}, "767": {"items": 1, "dots": false, "nav": true}, "991": {"items": 2}, "1199": {"items": 3, "margin": 30}}}'>
                                    <?php
                        $COMMENT_OBJ =new Comments(NULL);
                        $COMMENT =$COMMENT_OBJ->all();
                        foreach ($COMMENT as $comment){
                         ?>
                        <div class="item">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__content">
                                    <div class="testimonials-one__content-inner">
                                        <div class="testimonials-one__qoute"></div><!-- /.testimonials-one__qoute -->
                                        <p><?php echo substr($comment['comment'], 0, 130).'....'; ?></p>
                                        <div class="testimonials-one__infos">
                                            <div class="testimonials-one__image">
                                                <div class="testimonials-one__image-inner">
                                                    <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="">
                                                </div><!-- /.testimonials-one__image-inner -->
                                            </div><!-- /.testimonials-one__image -->
                                            <div class="testimonials-one__infos-content">
                                                <h3><?php echo $comment['title']; ?></h3>
                                                <span><?php echo $comment['name']; ?></span>
                                            </div><!-- /.testimonials-one__infos-content -->
                                        </div><!-- /.testimonials-one__infos -->
                                    </div><!-- /.testimonials-one__content-inner -->
                                </div><!-- /.testimonials-one__content -->
                            </div><!-- /.testimonials-one__single -->
                        </div><!-- /.item -->
                         <?php 
                        }
                        ?>
                    </div><!-- /.testimonials-one__carousel owl-carousel owl-theme thm__owl-carousel -->
                </div><!-- /.container -->
            </section><!-- /.testimonials-one__carousel-wrapper -->




            <section class="brand-one brand-one__home-one">
                <div class="container">
                    <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme" data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 6, "dots": false, "nav": false, "margin": 0, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 5}, "480": {"items": 3, "margin": 5}, "991": {"items": 4, "margin": 5}, "1199": {"items": 5, "margin": 5}}}'>
                       <?php
                    foreach ($GALLERY as $gallery) {
                        ?>
                        <div class="item">
                            <img src="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name']?>" alt="">
                        </div><!-- /.item -->
                     <?php
                    }
                     ?>
                    </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
                </div><!-- /.container -->
            </section><!-- /.brand-one -->

            <?php include './footer.php'; ?>
        </div><!-- /.page-wrapper -->



        <div class="side-menu__block">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
                <!-- /.fa fa-close --></a>

            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">

                <a href="index.php" class="side-menu__logo"><img src="assets/images/preload.PNG" alt="" width="110"></a>
                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <p class="side-menu__block__copy">(c) 2022 <a href="#">Smart Digital</a> - All rights reserved.</p>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/pearldiversnwatersport/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/unawatunadiving"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/pearldivers.lk/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tripadvisor.com/Attraction_Review-g644047-d3698397-Reviews-Pearl_Divers-Unawatuna_Galle_District_Southern_Province.html"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Template JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/wow.min.js"></script>

        <!-- Custom Scripts -->
        <script src="assets/js/theme.js"></script>
    </body>

</html>