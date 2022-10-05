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
     require_once('AluguerUm.php');
  
     $db = new Db;
     $stmt=$db->connect()->query("SELECT * FROM aluguer_um");  
     $alugueres_um = array();

    foreach($stmt as $row){
      $id_um = $row['id'];
      $ponto_um = $row['texto'];

      $aluguer_um = new Aluguer($id_um, $ponto_um);
      array_push($alugueres_um, $aluguer_um);

    }

     $stmt=$db->connect()->query("SELECT * FROM aluguer_dois");  
     $alugueres_dois = array();

     foreach($stmt as $row){

      $id_dois = $row['id'];
      $ponto_dois = $row['texto'];

      $aluguer_dois = new Aluguer($id_dois, $ponto_dois);
      array_push($alugueres_dois, $aluguer_dois);

    }

    ?>

    <header id="header" class="fixed-top">
     <?php  require_once('header.php');?>
    </header><!-- End Header -->

   
    <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <br>
          <p>Serviço de Aluguer</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
          <br>
            <p>
              Vantagens
            </p>
            <ul>
            <?php foreach($alugueres_um as $aluguer_um){?>
              <li><i class="ri-check-double-line"></i><?php echo ($aluguer_um->getTexto());?></li>
            <?php } ?>  
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" style="float: right;">
            <p>
              <img src="fotos/aluguer/vantagens_aluguer.jpg">
            </p>
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
          <div class="col-lg-6">
        
              <img src="fotos/aluguer/como_aluguer.jpg" style="width: 300px; height:200px;">
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            <br>
            <br>
              Como funciona o aluguer?
            </p>
            <ul>
            <?php foreach($alugueres_dois as $aluguer_dois){?>
              <li><i class="ri-check-double-line"></i><?php echo ($aluguer_dois->getTexto());?></li>
            <?php } ?> 
            </ul>
           
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
          <br>
          <br>
          <!-- <img src="fotos/aluguer/kits.jpg" style="width: 1000px; height:300px;"> -->

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