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

    <?php
      require_once('bd.php');
      require_once('Afiacao.php');

      $db = new Db;
      $stmt=$db->connect()->query("SELECT * FROM afiacoes WHERE id='1'");  
      $row = $stmt->fetch();

      $id_um = $row['id'];
      $titulo_um = $row['titulo'];

      $stmt=$db->connect()->query("SELECT * FROM afiacoes WHERE id='2'");  
      $row = $stmt->fetch();

      $id_dois = $row['id'];
      $titulo_dois = $row['titulo'];

      $stmt=$db->connect()->query("SELECT * FROM afiacoes WHERE id='3'");  
      $row = $stmt->fetch();

      $id_tres = $row['id'];
      $titulo_tres = $row['titulo'];

      $stmt=$db->connect()->query("SELECT * FROM afiacoes WHERE id='4'");  
      $row = $stmt->fetch();

      $id_quatro = $row['id'];
      $titulo_quatro = $row['titulo'];

      $a1 = new Aficao($id_um, $titulo_um);
      $a2 = new Aficao($id_dois, $titulo_dois);
      $a3 = new Aficao($id_tres, $titulo_tres);
      $a4 = new Aficao($id_quatro, $titulo_quatro);


      $afiacoes = array(
        "1" => $a1,
        "2" => $a2,
        "3" => $a3,
        "4" => $a4,
      );

    ?>

    <header id="header" class="fixed-top">
     <?php  require_once('header.php');?>
    </header><!-- End Header -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <br>
          <p>Serviço de Afiação</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box"><div class="icon"><img src="fotos/afiacoes/laminas_industriais.jpg" style="widht:100px; height:100px;"></img></div>
              <h4><a><?php echo($afiacoes[1]->getTitulo());?></a></h4>
             <!-- <a href="">Mais informações</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="fotos/afiacoes/facas_cutelos_tesouras.jpg" style="widht:100px; height:100px;"></img></i></div>
              <h4><a><?php echo($afiacoes[2]->getTitulo());?></a></h4>
              <!-- <a href="">Mais informações</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="fotos/afiacoes/discos_maquinas.jpg" style="widht:100px; height:100px;"></img></div>
              <h4><a><?php echo($afiacoes[3]->getTitulo());?></a></h4>
              <br>
              <!-- <a href="">Mais informações</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="fotos/afiacoes/pre-cortadores.jpg" style="widht:100px; height:100px;"></img></div>
              <h4><a><?php echo($afiacoes[4]->getTitulo());?></a></h4>
              <!-- <a href="">Mais informações</a> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->

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