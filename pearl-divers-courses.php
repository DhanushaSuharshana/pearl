<!DOCTYPE html>
<?php
include_once (dirname(__FILE__) . '/class/include.php');
?>
<html lang="en" dir="ltr">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Courses Page ||  Pearl Divers Sri Lanka</title>

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


            <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <ul class="list-unstyled thm-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">Courses</a></li>
                    </ul><!-- /.list-unstyled -->
                    <h2 class="page-header__title">Courses</h2><!-- /.page-header__title -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="course-one">
              
                <div class="container">
                    <div class="row">
                        <?php
                        $COURSE_OBJ = new Room(NULL);
                        $COURSE = $COURSE_OBJ->all();
                        foreach ($COURSE as $course){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-one__single">
                                <div class="course-one__image">
                                    <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>" class="course-one__cat">advanced</a>
                                    <div class="course-one__image-inner">
                                        <img src="upload/room/<?php echo $course['image_name'];?>" alt="">
                                        <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"><i class="scubo-icon-plus-symbol"></i></a>
                                    </div><!-- /.course-one__image-inner -->
                                </div><!-- /.course-one__image -->
                                <div class="course-one__content hvr-sweep-to-bottom">
                                    <h3><a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"><?php echo $course['title'];?></a></h3>
                                   <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"> <p><?php echo substr($course['description'], 0, 100).'........';?></p>
                                   </a>
                                </div><!-- /.course-one__content -->
                                <a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>" class="course-one__book-link">View More</a>
                            </div><!-- /.course-one__single -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                       <?php 
                        }
                       ?>
                    </div><!-- /.row -->
                  
                </div><!-- /.container -->
            </section><!-- /.course-one -->

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