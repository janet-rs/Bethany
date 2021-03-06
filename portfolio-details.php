<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Breal Travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
 
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="buscador.css">
  <!--JS-->
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/jquery.dataTables.min.js"></script>
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
            <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
            <li class="dropdown"><a href="portfolio-details.html"><span>Servicios</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
              <li><a href="servcios.php?idTipoVia=1">Familiar</a></li>
                <li><a href="servcios.php?idTipoVia=2">Pareja</a></li>
                <li><a href="servcios.php?idTipoVia=3">Grupo</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="contacto.php">Contacto </a></li>
            <li>
              <form class="d-flex">
                <input class="form-control me-2" type="search" id="inputBusqueda" placeholder="Buscar"
                  aria-label="Buscar">
              </form>
              <div class="search" id="search">
                <table class="search-table" id="searchTable">
                  <thead>
                    <tr>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="index.html">Inicio</a></td>
                    </tr>
                    <tr>
                      <td><a href="servcios.php?idTipoVia=1">Familiar</a></td>
                    </tr>
                    <tr>
                      <td><a href="servcios.php?idTipoVia=2">Parejas</a></td>
                    </tr>
                    <tr>
                      <td><a href="servcios.php?idTipoVia=3">Grupo</a></td>
                    </tr>
                    <tr>
                      <td><a href="contacto.php">Contacto</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">

      
      <?php
        require './modelo/conexion.php';
        $idViaje = $_GET['idVia'];
        $sql = "SELECT * FROM viajes WHERE idViaje = $idViaje";
        $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
        while ($row = mysqli_fetch_array($resultado)) {
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

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo $imagen1; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $imagen2; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo $imagen3; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informaci??n</h3>
              <ul>
                <li><strong>Destino</strong>: <?php echo $hotel; ?></li>
                <li><strong>Hotel</strong>: <?php echo $hotel; ?></li>
                <li><strong>Duracion de Viaje</strong>: <?php echo $duracion; ?></li>
                <li><strong>Precio final</strong>: <?php echo $precio; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Descripci??n</h2>
              <p>
                <?php echo $descripcion; ?>
              </p>
            </div>
          </div>

        </div>

      </div>

      <?php
        }
      ?>
    </section><!-- End Portfolio Details Section -->

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
              M??xico <br><br>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/buscador.js"></script>
</body>

</html>