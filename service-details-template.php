<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - Cloud Guardians Tech</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="./views/assets/img/favicon.png" rel="icon">
  <link href="./views/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./views/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./views/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="./views/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="./views/assets/css/main.css" rel="stylesheet">

  <script src="./views/assets/js/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        $.get("./views/data/service/service-<?= $_GET['service'] ?>.html", function(data, status){
            $("#service-details-template").html(data);
            $("#<?= $_GET['service'] ?>").attr("class", "active");
        });
    });
  </script>
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./views/assets/img/logo.png">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home<br></a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services" class="active">Services</a></li>
          <li><a href="/#solutions">Solutions</a></li>
          <li class="dropdown"><a href="/#training"><span>Trainings</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/#training-genai">Generative AI – Workshop</a></li>
              <li><a href="/#training-cybers">Cyber Security Awareness</a></li>
              <li><a href="/#training-awss">AWS Security Training</a></li>
              <li><a href="/#training-azures">Azure Security Training</a></li>
              <li><a href="/#training-fortinet">Fortinet Training</a></li>
              <li><a href="/#training-paloa">Palo Alto Training</a></li>
              <li><a href="/#training-crowds">CrowdStrike Training</a></li>
              <li><a href="/#training-sentinelOne">SentinelOne Training</a></li>
              <li><a href="/#training-zscaler">Zscaler Training</a></li>
              <li><a href="/#training-sophos">Sophos Training</a></li>
              <li class="dropdown"><a href="/#training-cldg"><span>Cloud Guardians</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="/#training-cldg">Cyber Security Program: Level 1</a></li>
                  <li><a href="/#training-cldg2">Cyber Security Program: Level 2</a></li>
                  <li><a href="/#training-cldg3">Cyber Security Program: Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="https://wa.me/+917304242328" target="_blank"><i class="bi bi-whatsapp"></i></a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div style="padding: 10px;">
        <section id="" class="call-to-action section dark-background">
          <video autoplay muted loop alt="" style="
            position: absolute;
            top: -120px;
            width: 100%;
            height: 600px;
            object-fit: fill;">
            <source src="./views/assets/vid/service-details-banner.mp4" type="video/mp4">
          </video>

          <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-xl-10">
                <div class="text-center">
                  <h3><?= $_GET['title'] ?></h3>
                </div>
              </div>
            </div>
          </div>

        </section><!-- /Call To Action Section -->
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><?= $_GET['title'] ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Services List</h4>
              <div class="services-list">
                <a href="./service-details-template.php?service=cloud-services&title=Cloud Security Services" id="cloud-services"><i class="bi bi-arrow-right-circle"></i><span>Cyber Security Service</span></a>
                <a href="./service-details-template.php?service=public-cloud-services&title=Public Cloud Service" id="public-cloud-services"><i class="bi bi-arrow-right-circle"></i><span>Public Cloud Services (AWS, Azure, GCP)</span></a>
                <a href="./service-details-template.php?service=managed-services&title=Managed Security Services" id="managed-services"><i class="bi bi-arrow-right-circle"></i><span>Managed Security Services</span></a>
                <a href="./service-details-template.php?service=virtual-ciso&title=Virtual CISOs" id="virtual-ciso"><i class="bi bi-arrow-right-circle"></i><span>Virtual CISOs (vCISO)</span></a>
                <a href="./service-details-template.php?service=vapt&title=Vulnerability Assessment and Penetration Testing (VAPT)" id="vapt"><i class="bi bi-arrow-right-circle"></i><span>Vulnerability Assessment & Penetration Testing (VAPT)</span></a>
                <a href="./service-details-template.php?service=genai-services&title=Generative AI Services" id="genai-services"><i class="bi bi-arrow-right-circle"></i><span>Generative AI Services</span></a>
                <a href="./service-details-template.php?service=data-security&title=Data Security Everywhere" id="data-security"><i class="bi bi-arrow-right-circle"></i><span>Data Security Everywhere</span></a>
                <a href="./service-details-template.php?service=zero-trust-framework&title=Helping Build Zero Trust Framework" id="zero-trust-framework"><i class="bi bi-arrow-right-circle"></i><span>Helping Build Zero Trust Framework</span></a>
              </div>
            </div><!-- End Services List -->
            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+91 7304242328 </span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">info@cloudguardianstech.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200" id="service-details-template">
            
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="/" class="logo d-flex align-items-center">
              <span class="sitename">Cloud Guardians Tech</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Vashi Sec-26</p>
              <p>New Mumbai, Maharashtra, India 400703</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+91 7304242328</span></p>
              <p><strong>Email:</strong> <span>info@cloudguardianstech.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/cloud-guardians"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/"> Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#about"> About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#services"> Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#solutions"> Solutions</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/#trainings"> Trainings</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Top Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="./service-details-template.php?service=cloud-services&title=Cloud Security Services"> Cyber Security Service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="./service-details-template.php?service=public-cloud-services&title=Public Cloud Service"> Public Cloud Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="./service-details-template.php?service=managed-services&title=Managed Security Services"> Managed Security Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="./service-details-template.php?service=genai-services&title=Generative AI Services"> Generative AI Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="./service-details-template.php?service=data-security&title=Data Security Everywhere"> Data Security Everywhere</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
            
            <p>We help enterprises modernize IT, harness Generative AI securely, and build a resilient foundation for long-term success.</p>
            <a href="/" >
              <img src="./views/assets/img/logo.png" style="max-height: 36px; margin-top: 25px;" id="footer-logo">
            </a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">cloudguardianstech.com</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          Designed by <a href="/">CloudGaurdians</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="./views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./views/assets/vendor/php-email-form/validate.js"></script>
  <script src="./views/assets/vendor/aos/aos.js"></script>
  <script src="./views/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./views/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./views/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="./views/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./views/assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="./views/assets/js/main.js"></script>

</body>

</html>