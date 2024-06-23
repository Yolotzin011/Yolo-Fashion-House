<!DOCTYPE html>
<html lang="es">
<head>
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <title>Elegance - Moda de Lujo</title>


  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f0f0;
    }

    header {
      background-color: #FF69B4;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    header .brand-logo {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .nav-wrapper a {
      color: #fff;
    }

    .sidenav a {
      color: #000;
    }

    section {
      padding: 50px 20px;
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    footer {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
    img{
      width:300px; 
      height:450px;
    }
    .page-footer{
       background-color: #FF69B4;
    }
  </style>
  <script>   
        $(document).ready(function() {
            $('.modal').modal();
            $('form').on('submit', function(event) {
                event.preventDefault();
                $('#confirmationModal').modal('open');
                $('#confirmButton').on('click', function() {
                    $('form')[0].submit();
                });
            });
        });
            </script>
</head>

<body>
  
  <header>
    <div class="brand-logo"></div>
    <p> Moda de lujo y el estilo unico</p>
  </header>

  
  <nav>
    <div class="nav-wrapper black">
      <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
      <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
      
      </div>
      <img src="ts.jpg" style="width:100%; height:200px">
      
    </div></li>
        <li><a href="index.php" class="pink-text">Registrar  /  Iniciar seción</a></li>
     <li><div class="divider"></div></li>
        <li><a href="Proyect.php" class="pink-text">Inicio</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Coleccion.php" class="pink-text">Colección</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Contacto.php" class="pink-text">Contacto</a></li>
         <li><div class="divider"></div></li>
         <li><a href="Comentario.php" class="pink-text">Comentario</a></li>
         <li><div class="divider"></div></li>
         <li><a href="otrosCom.php" class="pink-text">Otros Comentarios</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Credencial.php" class="pink-text">Credencial</a></li>
         <li><div class="divider"></div></li>
        <li><a href="nivel1.html" class="pink-text">Juego</a></li>
         <li><div class="divider"></div></li>
         <li><a href="pedidos.php" class="pink-text">Compras de Usuarios</a></li>
         <li><div class="divider"></div></li>
          <li><a href="general.php" class="pink-text">Más..</a></li>
         <li><div class="divider"></div></li>
      </ul>
    </div>
  </nav>




<section id="contacto" class="section">
    <div class="container">
      <h2>Contacto</h2>
      <p>¿Necesitas un diseño personalizado? ¡Contáctanos!</p>
      <form class="col s12"  action = "contactoBD.php" method="POST" enctype="multipart/form-data">
        <div class="input-field">
          <input id="idCliente" name="Clientetxt" REQUIRED type="text" class="validate">
          <label>idCliente</label>
        </div>
        <div class="input-field">
          <input id="nombre" name="Nombretxt" REQUIRED type="text" class="validate">
          <label>Nombre</label>
        </div>
        <div class="input-field">
          <input id="phone" name="Phonetxt" REQUIRED type="text" class="validate">
          <label>Phone</label>
        </div>
        <div class="input-field">
          <input id="date" name="Datetxt" REQUIRED type="date" class="validate">
          <label>Fecha requerida</label>
        </div>

        <button class="btn waves-effect waves-light black" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h4>Mensaje enviado</h4>
            <p>Su solicitud ha sido finalizada exitosamente.</p>
            <p>Visite a la tienda para más deatalles.</p>
        </div>
        <div class="modal-footer">
            <button id="confirmButton" class="modal-close waves-effect waves-green btn-flat">OK</button>
        </div>
    </div>
  </section>

   <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Yolo Fashion House</h5>
          <p class="grey-text text-lighten-4">Moda de lujo y estilo unico.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Enlaces Principales</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#inicio">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="Coleccion.php">Colección</a></li>
            <li><a class="grey-text text-lighten-3" href="Contacto.php">Contacto</a></li>
            <li><a class="grey-text text-lighten-3" href="Comentario.php">Comentario</a></li>
            <li><a class="grey-text text-lighten-3" href="nivel1.html">Juego</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2024 Yolo Fashion House.
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });
  </script>
</body>
</html>