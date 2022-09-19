<!DOCTYPE html>
<?php
include_once (dirname(__FILE__) . '/class/include.php');
?>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Team || Pearl Divers Sri Lanka</title>

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


            <?php include './header.php'; ?>


            <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <ul class="list-unstyled thm-breadcrumb">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="#">Our Team</a></li>
                    </ul><!-- /.list-unstyled -->
                    <h2 class="page-header__title">Our Team</h2><!-- /.page-header__title -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        <?php
                        $ACTIVITY_OBJ =new Activities(NULL);
                        $ACTIVITY =$ACTIVITY_OBJ->all();
                        foreach ($ACTIVITY as $activity){
                                ?>
                        <div class="col-lg-6">
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <img src="upload/activity/<?php echo $activity['image_name'];?>" alt="">
                                    <div class="comment-one__top">
                                        <h3><?php echo $activity['title'];?></h3>
                                        <span><?php echo $activity['short_description'];?></span>
                                    </div><!-- /.comment-one__top -->
                                    <p><?php echo $activity['description'];?> </p>
                               
                                </div><!-- /.comment-one__single -->
                            </div><!-- /.comment-one -->
                        </div><!-- /.col-lg-8 -->
<?php 
                        }
?>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.blog-details -->

            <?php include './footer.php'; ?><!-- /.site-footer-one -->
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