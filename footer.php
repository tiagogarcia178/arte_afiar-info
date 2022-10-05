<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
        require_once('bd.php');
        require_once('ContactosUm.php');

        $db = new Db;
        $stmt=$db->connect()->query("SELECT * FROM contactos");  
        $contactos = array();

      foreach($stmt as $row){

        $id = $row['id'];
        $endereço = $row['endereço'];
        $email_um = $row['email_um'];
        $email_dois = $row['email_dois'];
        $telefone = $row['telefone'];

        $contacto = new Contactos($id, $endereço, $email_um, $email_dois, $telefone);
        array_push($contactos,$contacto);

      }    
      $_SESSION['contactos'] = $contactos;

    ?>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          <div class="col-lg-2 col-md-5 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="afiacoes.php">Afiação</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aluguer.php">Aluguer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="produtos.php">Produtos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactos.php">Contactos</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>ADA</h3>
              <p class="pb-3"><em>Entre em contacto connosco quando quiser.</em>
              </p>
              <p>
              <?php echo($contactos[0]->getEndereço());?> <br>
                <strong>Phone:</strong><?php echo($contactos[0]->getTelefone());?><br>
                <strong>Email:</strong><?php echo($contactos[0]->getEmailUm());?><br>
              </p>
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

           <div class="col-lg-5 col-md-7 footer-newsletter">
           <img src="fotos/logo.png" style="height:180px; widht:50px; float:right; ">

          </div>

        </div>
      </div>
    </div>

    
  </body>
</html>