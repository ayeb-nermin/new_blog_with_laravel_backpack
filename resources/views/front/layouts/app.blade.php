<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{config('app.name','Coding Beanie Blog')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset("/HTML/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/HTML/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/HTML/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/HTML/assets/vendor/hover/hover.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/HTML/assets/vendor/ionicons/css/ionicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/HTML/assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/HTML/assets/vendor/venobox/venobox.css") }}" rel="stylesheet">
  <link href="{{ asset("/HTML/assets/vendor/owl.carousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/HTML/assets/css/style.css") }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="container d-lg-flex justify-content-between align-items-center">

      <div class="d-flex justify-content-between">
        <div class="logo me-auto">
          <a href="index.html"><img src="assets/img//logo.png" alt="logo"></a>
        </div>
        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>
      </div>

      <ul class="nav-menu list-unstyled">
        <li><a href="index.html" class="smoothScroll">Home</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
        <li><a href="#journal" class="smoothScroll">Blog</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
      </ul>

    </div>
  </nav><!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I'm <span class="typed"></span></h1>
        <p class="typed-items" data-typed-person="Alex Smith">Designer, Developer, Freelancer, Photographer</p>

        <ul class="list-unstyled list-social">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/me.jpg" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">im a ux /ui designer austin based who loves clean, simple & unique design. i also enjoy crafting brand identities, icons, & ilustration work. </p>
              <p class="separator">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.English person.</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">

        <div class="services-carousel owl-theme">

          <div class="services-block">

            <i class="ion-ios-browsers-outline"></i>
            <span>UI/UX DESIGN</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

          <div class="services-block">

            <i class="ion-ios-lightbulb-outline"></i>
            <span>BRAND IDENTITY</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

          <div class="services-block">

            <i class="ion-ios-color-wand-outline"></i>
            <span>WEB DESIGN</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

          <div class="services-block">

            <i class="ion-social-android-outline"></i>
            <span>MOBILE APPS</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

          <div class="services-block">

            <i class="ion-ios-analytics-outline"></i>
            <span>Analytics</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

          <div class="services-block">

            <i class="ion-ios-camera-outline"></i>
            <span>PHOTOGRAPHY</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>

          </div>

        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Portfolio</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>journal</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                  <p class="separator">To an English person, it will seem like simplified English
                  </p>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>

                <ul class="contact-details">
                  <li><span>23 Main, Street</span></li>
                  <li><span>New York, United States</span></li>
                  <li><span>+88 01912704287</span></li>
                  <li><span>example@example.com</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 mt-3 mt-md-0">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mt-3">
                    <div class="form-group">
                      <textarea class="form-control" name="message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
          <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
          <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights Folio. All rights reserved.</p>

      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset("/HTML/assets/vendor/jquery/jquery.min.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/jquery.easing/jquery.easing.min.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/php-email-form/validate.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/typed/typed.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/jquery-sticky/jquery.sticky.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/venobox/venobox.min.js") }}"></script>
  <script src="{{ asset("/HTML/assets/vendor/owl.carousel/owl.carousel.min.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/HTML/assets/js/main.js") }}"></script>

</body>

</html>