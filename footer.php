<footer class="site-footer-one">

    <div class="site-footer-one__bg" style="background-image: url(assets/images/background/footer-bg-1-1.jpg);"></div>
    <!-- /.site-footer-one__bg -->

    <!-- footer fishes -->
    <img src="assets/images/shapes/fish-f-1.png" alt="" class="site-footer__fish-1">
    <img src="assets/images/shapes/fish-f-2.png" alt="" class="site-footer__fish-2">
    <img src="assets/images/shapes/fish-f-3.png" alt="" class="site-footer__fish-3">

    <!-- footer trees -->
    <img src="assets/images/shapes/tree-f-1.png" class="site-footer__tree-1" alt="">
    <img src="assets/images/shapes/tree-f-2.png" class="site-footer__tree-2" alt="">

    <div class="site-footer-one__upper">
        <div class="container">
            <div class="footer-widget-row">
                <div class="footer-widget footer-widget__about">
                    <div class="footer-widget__inner">
                        <a href="./">
                            <img src="assets/images/logo-1-1.PNG" alt="" width="143">
                        </a>
<!--                        <p>&copy; Copyright 2022 by <br>
                            Pearl Divers</p>-->
                    </div><!-- /.footer-widget__inner -->
                </div><!-- /.footer-widget -->
                <div class="footer-widget footer-widget__links__widget-1">
                    <div class="footer-widget__inner">
                        <h3 class="footer-widget__title">Quick Link</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="about-pearl-divers.php">About Us</a></li>
                            <li><a href="pearl-divers-services.php">Services</a></li>
                            <li><a href="pearl-divers-contact.php">Contact</a></li>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget__inner -->
                </div><!-- /.footer-widget -->
                <div class="footer-widget footer-widget__links__widget-2">
                    <div class="footer-widget__inner">
                        <h3 class="footer-widget__title">Popular Courses</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                              <?php
                            $COURSE_OBJ =new Room(NULL);
                            $COURSE = $COURSE_OBJ->all();
                            foreach ($COURSE as $key=> $course){
                            if($key < 3){
                            ?>
                            <li><a href="view-pearl-divers-course.php?id=<?php echo $course['id'];?>"><?php echo $course['title'];?></a></li>
                                <?php
                            }
                            }
                       ?>
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget__inner -->
                </div><!-- /.footer-widget -->
                <div class="footer-widget footer-widget__links__widget-3">
                    <div class="footer-widget__inner">
                        <h3 class="footer-widget__title">Dive Sites</h3><!-- /.footer-widget__title -->
                        <ul class="footer-widget__links-list list-unstyled">
                              <?php
                            $ATTRACTION_OBJ =new Attraction(NULL);
                            $ATTRACTION = $ATTRACTION_OBJ->all();
                            foreach ($ATTRACTION as $key=> $attraction){
                            if($key < 3){
                            ?>
                            <li><a href="pearl-divers-dive-sites.php"><?php echo $attraction['title'];?></a></li>
                             <?php
                            }
                            }
                       ?>
                        
                        </ul><!-- /.footer-widget__links-list -->
                    </div><!-- /.footer-widget__inner -->
                </div><!-- /.footer-widget -->
                <div class="footer-widget footer-widget__social__widget">
                    <div class="footer-widget__inner">
                        <h3 class="footer-widget__title">Follow</h3><!-- /.footer-widget__title -->
                        <div class="footer-widget__social">
                            <a href="https://twitter.com/unawatunadiving"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/pearldiversnwatersport/"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.tripadvisor.com/Attraction_Review-g644047-d3698397-Reviews-Pearl_Divers-Unawatuna_Galle_District_Southern_Province.html"><i class="fab fa-tripadvisor"></i></a>
                            <a href="https://www.instagram.com/pearldivers.lk/"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget__inner -->
                </div><!-- /.footer-widget -->
            </div><!-- /.footer-widget-row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer-one__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="+ 94 91 22 42015"><i class="fa fa-phone-alt"></i>+ 94 91 22 42015</a>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="info@pearldivers.lk"><i class="fa fa-envelope"></i>info@pearldivers.lk</a>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="pearl-divers-contact.php"><i class="fa fa-map"></i> Peellagoda,Unawautuna,
                      </a>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</footer><!-- /.site-footer-one -->