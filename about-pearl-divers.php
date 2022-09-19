<!DOCTYPE html>
<?php
include_once (dirname(__FILE__) . '/class/include.php');
$ABOUT_DESCRIPTION_01 =new Page(1);
$ABOUT_DESCRIPTION_02 =new Page(2);
$ABOUT_IMAGE_AND_TEXT =new Page(3);
?>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About || Pearl Divers Sri Lanka</title>

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
            ?>    <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <ul class="list-unstyled thm-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">About</a></li>
                    </ul><!-- /.list-unstyled -->
                    <h2 class="page-header__title">About </h2><!-- /.page-header__title -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->



            <!-- /.feature-two -->
            <section class="cta-four">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="cta-four__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="upload/page/<?php echo $ABOUT_IMAGE_AND_TEXT->image_name;?>" alt="">
                                <div class="cta-four__image-content">
                                    <i class="scubo-icon-scuba-diving"></i>
                                 <?php echo $ABOUT_IMAGE_AND_TEXT->description;?>
                                </div><!-- /.cta-four__image-content -->
                            </div><!-- /.cta-four__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6">
                            <div class="cta-four__content">
                                <div class="block-title text-left">
                                    <img src="assets/images/shapes/sec-line-1.png" alt="">
                                    <p class="text-uppercase">About dive center</p>
                                    <!--                                <h3 class="text-uppercase"></h3>-->
                                </div><!-- /.block-title -->
                                <p><?php echo $ABOUT_DESCRIPTION_01->description;?></p>
                                <!-- /.thm-btn cta-four__btn -->
                            </div><!-- /.cta-four__content -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-12">
                            <div class="cta-four__content">
                                <p><?php echo $ABOUT_DESCRIPTION_02->description;?></p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                   
                </div><!-- /.container -->
            </section><!-- /.cta-four -->

            <section> 
                <section class="team-one team-one__home-two">
                    <div class="team-one__floated-text"></div><!-- /.team-one__floated-text -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 d-flex ">
                                <div class="my-auto">
                                    <div class="about-two__content">
                                        <div class="block-title text-left">
                                            <img src="assets/images/shapes/sec-line-1.png" alt="">
                                            <p class="text-uppercase">Boats</p>
                                        </div><!-- /.block-title -->
                                        <p>Morbi pharetr se id lectus iaculis, nec commodo mauris interdum. <br> Quisque ipsum neque,
                                            ullamcorper in diam nec.</p>
                                        <ul class="list-unstyled about-two__list">
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                One Catamaran 12 Seater, 27ft 
                                            </li>
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                One Yamaha speed boat, 22ft
                                            </li>
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                One speed hull dive boat 
                                            </li>
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                One dive boat 18ft 
                                            </li>
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                One glass bottom boat 18ft 
                                            </li>
                                            <li>
                                                <span class="about-two__list-count"></span>
                                                Two Seadoo jet skis 2013 models
                                            </li>
                                        </ul><!-- /.list-unstyled about-two__list -->
                                    </div><!-- /.about-two__content -->
                                </div><!-- /.my-auto -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6 team-one__home-two__wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                                        <div class="team-one__single">
                                            <img src="assets/images/team/team-1-1.jpg" alt="">
                                            <div class="team-one__content">
                                                <div class="team-one__content-inner">
                                                    <h3>Maggie Goodman</h3>
                                                    <span>Co Founder</span>

                                                </div><!-- /.team-one__content-inner -->
                                            </div><!-- /.team-one__content -->
                                        </div><!-- /.team-one__single -->
                                    </div><!-- /.col-lg-3 col-md-6 -->
                                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="team-one__single">
                                            <img src="assets/images/team/team-1-2.jpg" alt="">
                                            <div class="team-one__content">
                                                <div class="team-one__content-inner">
                                                    <h3>Craig Hawkins</h3>
                                                    <span>Co Founder</span>

                                                </div><!-- /.team-one__content-inner -->
                                            </div><!-- /.team-one__content -->
                                        </div><!-- /.team-one__single -->
                                    </div><!-- /.col-lg-3 col-md-6 -->
                                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="200ms">
                                        <div class="team-one__single">
                                            <img src="assets/images/team/team-1-3.jpg" alt="">
                                            <div class="team-one__content">
                                                <div class="team-one__content-inner">
                                                    <h3>Katharine Alvarez</h3>
                                                    <span>Co Founder</span>

                                                </div><!-- /.team-one__content-inner -->
                                            </div><!-- /.team-one__content -->
                                        </div><!-- /.team-one__single -->
                                    </div><!-- /.col-lg-3 col-md-6 -->
                                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                                        <div class="team-one__single">
                                            <img src="assets/images/team/team-1-4.jpg" alt="">
                                            <div class="team-one__content">
                                                <div class="team-one__content-inner">
                                                    <h3>Mabel Underwood</h3>
                                                    <span>Co Founder</span>

                                                </div><!-- /.team-one__content-inner -->
                                            </div><!-- /.team-one__content -->
                                        </div><!-- /.team-one__single -->
                                    </div><!-- /.col-lg-3 col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.team-one -->
               

        </div><!-- /.cta-three__feature -->




        <?php include './footer.php'; ?>
        <!-- /.site-footer-one -->
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