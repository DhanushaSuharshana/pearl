<!DOCTYPE html>
<?php
include_once (dirname(__FILE__) . '/class/include.php');

$id = $_GET["id"];

$COURSE_VIEW = new Room($id);
?>
<style>
    .outer { margin:0 auto; max-width:800px;}
    #big .item { margin:2px; color: #FFF; border-radius: 3px; text-align: center; }
    #thumbs .item { padding: 0px; margin:2px;  cursor: pointer; }
    #thumbs .current .item { border: 6px solid #ffd701; }
    .owl-theme .owl-nav [class*='owl-'] { -webkit-transition: all .3s ease; transition: all .3s ease; }
    .owl-theme .owl-nav [class*='owl-'].disabled:hover { background-color: #D6D6D6; }
    #big.owl-theme { position: relative; }
    #big.owl-theme .owl-next, #big.owl-theme .owl-prev { background:#333; width: 22px; line-height:40px; height: 40px; margin-top: -20px; position: absolute; text-align:center; top: 50%; }
    #big.owl-theme .owl-prev { left: 10px; }
    #big.owl-theme .owl-next { right: 10px; }
    #thumbs.owl-theme .owl-next, #thumbs.owl-theme .owl-prev { background:#333; }
</style>

<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Course Details || Pearl Divers Sri Lanka</title>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="courses-pearl-drivers.php">Courses</a></li>
                        <li class="active"><a href="">Course Details</a></li>
                    </ul><!-- /.list-unstyled -->
                    <h2 class="page-header__title">Course Details</h2><!-- /.page-header__title -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="blog-details">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="outer">
                                <div id="big" class="owl-carousel owl-theme">
                                    <?php
                                    $COURSE_PHOTO_OBJ = new RoomPhoto(NULL);
                                    $COURSE_PHOTO = $COURSE_PHOTO_OBJ->getRoomPhotosById($id);
                                    foreach ($COURSE_PHOTO as $key => $course_photo) {
                                        ?>
                                        <div class="item">
                                            <img src="upload/room/gallery/<?php echo $course_photo['image_name']; ?>" alt="">
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div id="thumbs" class="owl-carousel owl-theme">
                                    <?php
                                    foreach ($COURSE_PHOTO as $key => $course_photo) {
                                        ?>
                                        <div class="item">
                                            <img src="upload/room/gallery/thumb/<?php echo $course_photo['image_name']; ?>" alt="">
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>   
                            <div class="blog-details__content">
                                <div class="blog-one__meta"></div> 
                                <h3 class="blog-details__main-title"><?php echo $COURSE_VIEW->title; ?></h3>
                                <p><?php echo $COURSE_VIEW->description; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__category">
                                    <h3 class="sidebar__title">All Courses</h3><!-- /.sidebar__title -->
                                    <ul class="sidebar__category-list list-unstyled">
                                        <?php
                                        $COURSE_OBJ = new Room(NULL);
                                        $COURSE_TITLE = $COURSE_OBJ->all();
                                        foreach ($COURSE_TITLE as $c_title) {
                                            ?>
                                            <li><a href="view-pearl-divers-course.php?id=<?php echo $c_title['id']; ?>"><?php echo $c_title['title']; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul><!-- /.sidebar__category-list list-unstyled -->
                                </div><!-- /.sidebar__single  -->
                            </div><!-- /.sidebar -->
                        </div><!-- /.col-lg-4 -->


                    </div> 

                </div><!-- /.col-lg-8 -->

            </section> 
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-details -->

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

        <a href="" class="side-menu__logo"><img src="assets/images/logo-3-1.png" alt="" width="143"></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">(c) 2020 <a href="#">SCUBO</a> - All rights reserved.</p>
        <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
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
<script>
    $(document).ready(function () {
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        //var totalslides = 10;
        var syncedSecondary = true;

        bigimage
                .owlCarousel({
                    items: 1,
                    slideSpeed: 2000,
                    nav: true,
                    autoplay: true,
                    dots: false,
                    loop: true,
                    responsiveRefreshRate: 200,
                    navText: [
                        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                    ]
                })
                .on("changed.owl.carousel", syncPosition);

        thumbs
                .on("initialized.owl.carousel", function () {
                    thumbs
                            .find(".owl-item")
                            .eq(0)
                            .addClass("current");
                })
                .owlCarousel({
                    items: 4,
                    dots: true,
                    nav: true,
                    navText: [
                        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                    ],
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: 4,
                    responsiveRefreshRate: 100
                })
                .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            //var current = el.item.index;

            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                    .find(".owl-item.active")
                    .first()
                    .index();
            var end = thumbs
                    .find(".owl-item.active")
                    .last()
                    .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }

        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });
    });

</script>
</body>
</html>