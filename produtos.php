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
        require_once('ProdutosUm.php');

        $db = new Db;
        $stmt=$db->connect()->query("SELECT * FROM produtos");  
        $produtos = array();

      foreach($stmt as $row){

        $id = $row['id'];
        $titulo = $row['titulo'];

        $produto = new Produto($id, $titulo);
        array_push($produtos,$produto);

      }    
    ?>

   
    <main id="main">
    
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <br>
          <p>Produtos</p>
          <h4>Produtos para respetivas secções</h4>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-5 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="fotos/produtos/carne.jpg" style="widht:100px; height:80px;"></img></div>
              <h4><a><?php echo($produtos[0]->getTitulo());?></a></h4>
             <a href="carne_detalhe.php">Mais informações</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="fotos/produtos/frango.jpg" style="widht:100px; height:80px;"></img></div>
              <h4><a><?php echo($produtos[1]->getTitulo());?></a></h4>
              <a href="aves_detalhe.php">Mais informações</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="fotos/produtos/salmao.jpg" style="widht:100px; height:80px;"></img></div>
              <h4><a><?php echo($produtos[2]->getTitulo());?></a></h4>
              <a href="peixe_detalhe.php">Mais informações</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="fotos/produtos/salame.jpg" style="widht:100px; height:80px;"></img></div>
              <h4><a><?php echo($produtos[3 ]->getTitulo());?></a></h4>
              <a href="charcutaria_detalhe.php">Mais informações</a>
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