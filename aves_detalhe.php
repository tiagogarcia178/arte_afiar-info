<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arte D'Afiar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="fotos/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <header id="header" class="fixed-top">
     <?php  require_once('header.php');?>
    </header><!-- End Header -->

    <?php
      require_once('bd.php');
      require_once('Laminas.php');

      $db = new Db;
      $stmt=$db->connect()->query("SELECT * FROM laminas");  
      $laminas = array();

      foreach($stmt as $row){

        $id = $row['id'];
        $titulo = $row['titulo'];

        $lamina = new Lamina($id, $titulo);
        array_push($laminas,$lamina);

      }    
    ?>

   
    <main id="main">
    
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <br>
          <h4>Material de corte para o processamento e transformação de aves</h4>
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
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <!-- <div class="col-lg-4 col-md-5 portfolio-item filter-app">
            <img src="fotos/detalhe_carne/discos-cruzetas.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Disco e cruzetas</h4> -->
              <!-- <p>App</p> -->
            <!-- </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="fotos/detalhe_carne/fita-de-serra.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[1]->getTitulo());?></h4>
              <!-- <p>Web</p> -->
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="fotos/detalhe_carne/lamina-bifes.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[2]->getTitulo());?></h4>
              <!-- <p>App</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="fotos/detalhe_carne/pre-cortadores.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[3]->getTitulo());?></h4>
              <!-- <p>Card</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="fotos/detalhe_carne/cutter.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lâminas Kutter</h4> -->
              <!-- <p>Web</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            <!-- </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="fotos/detalhe_carne/descoratadora.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[5]->getTitulo());?></h4>
              <!-- <p>App</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="fotos/detalhe_carne/afiadores.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[6]->getTitulo());?></h4>
              <!-- <p>Card</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="fotos/detalhe_carne/luvas.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[7]->getTitulo());?></h4>
              <!-- <p>Card</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="fotos/detalhe_carne/serilhado.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[8]->getTitulo());?></h4>
              <!-- <p>Web</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="fotos/detalhe_carne/espetadas.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo($laminas[9]->getTitulo());?></h4>
              <!-- <p>Web</p> -->
              <!-- <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link"
                title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

        </div>

      </div>
    </section> 
    </main>


    <footer id="footer">
    <?php  require_once('footer.php');?>
  </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  </body>
</html>