<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - BookStore</title>

   
    <link href="vendor/bootstrap/css/material-kit.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
    <link href="css/shop-homepage.css" rel="stylesheet">
     <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  </head>

<body>
<?php
					session_start();
					if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 1) {
						//carregar css para perfil 1
						echo '<link rel="stylesheet" href="style'.$_SESSION['perfil'].'.css">';
					}
					if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 2) {
						//carregar css para perfil 2
						echo '<link rel="stylesheet" href="style'.$_SESSION['perfil'].'.css">';
					}
					if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 3) {
						//carregar css para perfil 3
						echo '<link rel="stylesheet" href="style'.$_SESSION['perfil'].'.css">';
					}

					if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 4) {
						//carregar css para perfil 4
						echo '<link rel="stylesheet" href="style'.$_SESSION['perfil'].'.css">';
					}

					if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == 5) {
						//carregar css para perfil 5
						echo '<link rel="stylesheet" href="style'.$_SESSION['perfil'].'.css">';
					}

						if(isset($_GET['id']) && $_GET['id'] == 1){
							echo "<div class='alert alert-success'>Usuario logado com sucesso</div>";
						}elseif(isset($_GET['id']) && $_GET['id'] == 2){
							echo "<script>alert('E-mail ou senha inválidos!')</script>";
						}
				 ?>

<div class="section section-signup page-header" style="background-image: url('./assets/img/city.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
              <form class="form" method="post" action="src/login.php">
                <div class="card-header card-header-primary text-center">
                  <img src="boo.png" style="width: 40px;" /><h4>BookStore</h4>
                  
                </div>
                <p class="description text-center">Insira seu E-mail e Senha nos campos abaixo</p>
                <div class="card-body">

                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email..." name="username">
                  </div></span>

                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">https</i>
                      </span>
                    </div>

                    <input type="password" class="form-control" placeholder="Senha..." name="password">
                  </div></span>

                </div>
                <div class="footer text-center">
                  <a href="cadastro.html" class="btn btn-primary btn-link btn-wd btn-lg">Registrar</a>
                  <input type="submit" value="Login" class="btn btn-primary btn-lg">
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
