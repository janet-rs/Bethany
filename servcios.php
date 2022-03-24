<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Breal Travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>BrealTravel</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto " href="index.html">Inicio</a></li>
            <li><a class="nav-link scrollto" href="index.html">Nosotros</a></li>
            <li class="dropdown"><a href="portfolio-details.html"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
              <li><a href="servcios.php?idTipoVia=1">Familiar</a></li>
                <li><a href="servcios.php?idTipoVia=2">Pareja</a></li>
                <li><a href="servcios.php?idTipoVia=3">Grupo</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="contacto.html">Contacto </a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  
  <br>
  <br>
  <main id="main">
  <!-- ======= Breadcrums ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

      <?php
        require './modelo/conexion.php';
        $idTipoViaje = $_GET['idTipoVia'];
        $sql = "SELECT tv.nomTipoViaje FROM tipoviaje tv INNER JOIN viajes_tipoviaje vtv on tv.idTipoViaje = vtv.idTipoViaje where tv.idTipoViaje = $idTipoViaje";
        $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
        $arr = mysqli_fetch_array($resultado);
      ?>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html">Inicio</a></li>
            <li class="breadcrumb-item"><a href="">Servicios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Paquetes en <?php echo $arr[0];?></li>
          </ol>
        </nav>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Paquetes en <?php echo $arr[0];?></h2>
          <p>En estos tiempos, las cosas cambian constantemente.
             Te ayudaremos a tomar las mejores decisiones para tú viaje y a resolver todo lo que vaya sucediendo. </p>
        </div>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>-->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
        require './modelo/conexion.php';
        $idTipoViaje = $_GET['idTipoVia'];
        $sql = "SELECT * FROM viajes v INNER JOIN viajes_tipoviaje vtv on v.idViaje = vtv.idViaje where idTipoViaje = $idTipoViaje";
        $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
        while ($row = mysqli_fetch_array($resultado)) {
            $idViaje=$row['idViaje'];
            $nombreDestino= $row['nombreDestino'];
            $hotel= $row['hotel'];
            $duracion= $row['duracion'];
            $precio= $row['precio'];
            $descripcion= $row['descripcion'];
            $imagen1= $row['imagen1'];
            $imagen2= $row['imagen2'];
            $imagen3= $row['imagen3'];
        ?>
        &nbsp;


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo $imagen1; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $nombreDestino; ?></h4>
                <div class="portfolio-links">
                  <a href="<?php echo $imagen2; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?idVia=<?php echo $idViaje; ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
        <?php
          }
        ?>
          

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Breal Travel</h3>
            <p>
              Dolores Hidalgo <br>
              Guanajuato<br>
              México <br><br>
              <strong>Phone:</strong> 418 109 7750<br>
              <strong>Email:</strong> brealtravel@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>BrealTravel</span></strong>. All Rights Reserved
        </div>
       </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>