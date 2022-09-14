<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Page || Pearl Divers Sri Lanka</title>

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
        <link href="assets/contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="preloader">
            <img src="assets/images/preloader.png" class="preloader__image" alt="">
        </div><!-- /.preloader -->
        <div class="page-wrapper">

            <?php include './header.php'; ?>

            <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <ul class="list-unstyled thm-breadcrumb">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="#">Contact</a></li>
                    </ul><!-- /.list-unstyled -->
                    <h2 class="page-header__title">contact us</h2><!-- /.page-header__title -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="contact-one">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="contact-one__content">
                                <h3>Get in Touch <br> With Us</h3>
                                <p>Aliq is notm hendr erit a augue insu image pellen tes que id erat quis sollicitud. Lorem ipsum is
                                    simply free text dolor sit amet, consectetur adipiscing ullam blandit hendrerit faucibus
                                    suspendisse.</p>
                                <!-- /.contact-one__social -->
                            </div><!-- /.contact-one__content -->
                        </div><!-- /.col-xl-4 -->
                        <div class="col-xl-8">
                            <div id="contact" action="" method="post" class="contact-one__form ">

                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="" id="spanFullName" ></span>
                                        <input type="text" name="txtFullName" id="txtFullName" class="sm-form-control input-validater" placeholder="Full Name" >
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <span id="spanEmail" ></span>
                                        <input type="text" name="txtEmail" id="txtEmail" class="sm-form-control input-validater" placeholder="Email Address" >
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="txtPhone" id="txtPhone" class="sm-form-control input-validater" placeholder="Phone number" >
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <span id="spanMessage" ></span>
                                        <textarea class="required sm-form-control" name="txtMessage"  id="txtMessage" placeholder="Messages"></textarea>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-6">
                                        <span id="capspan" ></span> 
                                        <input type="text" name="captchacode" id="captchacode" class="sm-form-control input-validater" placeholder="Security Code" >
                                    </div><!-- /.col-md-12 -->


                                    <div class="col-md-6">
                                        <img src="assets/contact-form/Generate_Captcha_Code.php?rand=1837908792" id='captchaimg'  style=" margin-top: 10px;">  

                                        <a href='javascript: refreshCaptcha();' class="contact-details">
                                            <div class="refreshbox">
                                                <div class="refresh-img">        
                                                    <img style="border:none;" src="./assets/contact-form/img/refresh.png" title="Click to change the code"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <script language='JavaScript' type='text/javascript'>

                                        function refreshCaptcha() {
                                            var img = document.images['captchaimg'];
                                            var c = Math.round(Math.random() * 10000);
                                            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
                                        }

                                    </script>

                                </div>  

                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-sm-4">
                                        <div class="div-check" >
                                            <img src="assets/contact-form/img/checking.gif" id="checking"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 text-right">

                                    </div> 
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <button type="submit" class="thm-btn contact-one__btn" id="btnSubmit" 
                                        name="template-contactform-submit" value="submit">Send message</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.col-xl-8 -->
                </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <section class="cta-one">
        <div class="container wow fadeInRight" data-wow-duration="1500ms">
            <div class="cta-one__title">support</div><!-- /.cta-one__title -->
            <div class="inner-container">
                <div class="row">
                    <div class="col-lg-5 d-flex">
                        <div class="my-auto">
                            <div class="cta-one__phone">
                                <i class="fa fa-phone-alt"></i>
                                <a href="tel:+94 912 242 015">+94 912 242 015</a>
                            </div><!-- /.cta-one__phone -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="cta-one__content">
                            <h3>FOR MORE INFORMATION & CUSTOM <br>
                                PLANS PLEASE CALL</h3>
                        </div><!-- /.cta-one__content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15871.58497240644!2d80.2507435!3d6.008983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2891191b154bc9e1!2sPearl+Divers+PADI+Resort!5e0!3m2!1sen!2s!4v1463203215967" class="google-map__contact" allowfullscreen></iframe>
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
<script src="assets/contact-form/scripts.js" type="text/javascript"></script>
</body>


</html>