<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/details.php'; 
    $page = "Pool Services";
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo "$company"; ?> | <?php echo "$company"; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.svg">


</head>

<body>
    
    

   
    <!-- ======= Header ======= -->
    <?php include 'includes/header.php';?>
    <!-- End Header -->

    <main id="main">

      
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Testimonials</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Have an insight of what our clients say about us.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile">
                            <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                            <h4>Saul Goodman</h4>
                            <span>Centurion Rgn</span>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="quote">
                            <b><img src="assets/img/quote_sign_left.png" alt=""></b> What a great friendly team, we are just super happy with the fibre lining work done and we cannot recommend the <?php echo $company ; ?> enough! . <small><img src="assets/img/quote_sign_right.png" alt=""></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="quote">
                            <b><img src="assets/img/quote_sign_left.png" alt=""></b> Our end product speaks for itself, from our site visit right through to the water back from the bladders, we could not ask for more.

                            <small><img src="assets/img/quote_sign_right.png" alt=""></small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile">
                            <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                            <h4>Sara Wilsson</h4>
                            <span>Joburg Rgn</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Contact Us</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Have a specific pool project in mind? Maybe you’re just exploring some ways to take your pool to thenext level?

                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>1440 vulture street
                                    <br>Riverside view, Ext 35</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p><?php echo $email; ?></p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p><?php echo $tel; ?></p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>

                                <div class="text-center my-3"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Stemgon</strong>. All Rights Reserved
                    </div>
                    <div class="credits">

                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>