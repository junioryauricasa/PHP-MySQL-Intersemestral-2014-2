<?php
require("php/conexion.php");

$id = $_GET['id'];

if((isset($id)) && ($id != "")){


// echo "Estas en la pagina personal de: ".$_GET['id'];

$query_usuario = "SELECT nombre, apellido, correo, password FROM
                          usuario WHERE id_usuario='".$id."'";

// echo "hola '"   .$nombre.   "' como estas";
// echo "hola".$nombre."como estas";

$result = mysqli_query($link, $query_usuario);

$row_usuario = mysqli_fetch_assoc($result);

print_r($row_usuario);

}else{
  header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <form action="usuario_editar_post.php" method="POST">
        
        <div class="form-group">   <!-- agregue un div con class="form-group" -->
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="<?php echo $row_usuario['nombre'];?>" id="nombre" class="form-control">
                                          <!--  le agregue la class="form-control"-->
        </div>

        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text"  value="<?php echo $row_usuario['apellido'];?>"  name="apellido" id="apellido" class="form-control">
        </div>


        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" name="correo" value="<?php echo $row_usuario['correo'];?>" id="correo" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" id="password" value="<?php echo $row_usuario['password'];?>"class="form-control">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <input type="submit" value="Editar usuario" class="btn btn-success">

      </form>
    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>






















