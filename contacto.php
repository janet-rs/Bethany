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


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="buscador.css">
  <!--JS-->
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/jquery.dataTables.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>

  <script>
    function onSubmit(token) {
      document.getElementById("msjContacto").submit();
    }
  </script>

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
            <li><a class="getstarted scrollto" href="cerrarSesion.php">Cerrar Sesi??n</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrums ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.html">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
          </ol>
        </nav>
      </div>
    </section><!-- End Breadcrumbs -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contactanos para mas informaci??n</h2>
              <p>Puedes contacarnos para poderte darte mas detalles de los diferentes vajes que tenemos disponibles para
                ti.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.62364474009!2d-100.93313418575224!3d21.167370788409315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b3efe2e87ccd7%3A0xcf1c80c255f1993e!2sUniversidad%20Tecnol%C3%B3gica%20del%20Norte%20de%20Guanajuato!5e0!3m2!1ses-419!2smx!4v1648153895155!5m2!1ses-419!2smx"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <hr style="margin-top: 40px;" class="bg-danger border-2 border-top border-secondary">
            <div class="container">
              <h4 style="margin-top: 33px; margin-bottom: 20px; text-decoration: underline">
                Encu??ntranos en el mapa
              </h4>
              <div id="map-template"></div>
            </div>
            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Dolores Hidalgo Cuna de la Independencia Nacional, Gto., M??xico</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>brealtravel@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>418 117 5572</p>
                </div>
              </div>
            </div>

            <form id="msjContacto" action="../Bethany/modelo/mensaje.php" method="post" class="php-email-form mt-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>

              <div class="text-center">
                <button class="g-recaptcha" 
                  data-sitekey="6LcR7VUfAAAAADALeLtEKrgj6MO13pT169o3H68z" 
                  data-callback='onSubmit' 
                  data-action='submit'>Submit</button>
                <!--<button type="submit">Enviar Mensaje</button>-->
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
   <script src="assets/js/buscador.js"></script>

</body>

</html>