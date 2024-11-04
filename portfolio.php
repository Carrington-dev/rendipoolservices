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

        

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Portfolio</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">
                            View a wide range of services we offer and feel free to contact us with your own style and we will deliver everything on point.

                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Pool</li>
                            <li data-filter=".filter-card">Inner</li>
                            <li data-filter=".filter-web">Paint</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 1</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 3</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 4</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 5</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 6</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 7</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 8</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 9</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 10</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 10</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 11</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 12</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 12</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p14.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 14</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p15.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 15</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p16.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 16</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p17.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 17</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p18.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 18</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/pool/p19.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 19</h4>
                            <p>Pool Construction</p>
                            <a href="assets/img/pool/p19.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 3</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 2</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 2</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 2</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pool 3</h4>
                            <p>Pool</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 1</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inner 3</h4>
                            <p>Inner</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Paint 3</h4>
                            <p>Paint</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="." class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        

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