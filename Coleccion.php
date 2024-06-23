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

  <title>Coleccion</title>
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

    .product-card {
      margin: 20px 0;
    }

    img{
      width:300px; 
      height:450px;
    }
    .page-footer{
       background-color: #FF69B4;
    }
  
  </style>
</head>

<body>
   <header>
    <div class="brand-logo"></div>
    <p>Moda de lujo y el estilo unico</p>
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

<section id="coleccion" class="section">
    <div class="container">
      <h2>Colección</h2>
      <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress1.jpg" alt="Producto 1">
              <span class="card-title">Vestido Elegante-De noche</span>
            </div>
            <div class="card-content">
              <p>Elegante diseño de gala en color negro ideal para eventos formales y noches especiales.</p>
              <p>Precio: $9500.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar1.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress2.jpg" alt="Producto 2">
              <span class="card-title">Vestido Elegante-Formal</span>
            </div>
            <div class="card-content">
              <p>Perfecto para eventos formales donde se desee destacar con estilo y elegancia.</p>
              <p>Precio: $10,000.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar2.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress3.jpg" alt="Producto 3" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-Formal</span>
            </div>
            <div class="card-content">
              <p>Exquisita creación en tono plateado, ideal para eventos formales y elegantes.</p>
              <p>Precio: $9900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar3.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress4.jpg" alt="Producto 4" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-De noche</span>
            </div>
            <div class="card-content">
              <p>Elegante vestido de noche de color rojo brillante.</p>
              <p>Precio: $7900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar4.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress5.jpg" alt="Producto 5" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-Alfombra</span>
            </div>
            <div class="card-content">
              <p>Perfecto para eventos formales, combina modernidad y elegancia.</p>
              <p>Precio: $15500.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar5.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress6.jpg" alt="Producto 6" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante</span>
            </div>
            <div class="card-content">
              <p>Ideal para ocasiones formales o eventos de gala.</p>
              <p>Precio: $9900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar6.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress7.jpg" alt="Producto 7" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-Formal</span>
            </div>
            <div class="card-content">
              <p>Destacando tanto por su elegancia como por su toque sensual.</p>
              <p>Precio: $9900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar7.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress8.jpg" alt="Producto 8" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-Alfombra </span>
            </div>
            <div class="card-content">
              <p>Opción ideal para eventos formales y alfombras rojas.</p>
              <p>Precio: $14900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar8.php">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m6 l4 product-card">
          <div class="card">
            <div class="card-image">
              <img src="dress9.jpg" alt="Producto 9" width:300px; height:300px;>
              <span class="card-title">Vestido Elegante-Formal</span>
            </div>
            <div class="card-content">
              <p>Vestido ideal para eventos formales.</p>
              <p>Precio: $10900.00</p>
            </div>
            <div class="card-action">
              <a href="Comprar9.php">Comprar ahora</a>
            </div>
          </div>
        </div>

        <div class="container">
      <h2>Contacto</h2>
      <p>¿Necesitas un diseño personalizado? ¡Contáctanos!</p>

        <a href="Contacto.php" class="pink-text">Enviar Mensaje..</a>
      </div>

      <div class="container">
      <h2>Comentario</h2>
      <p>Escribe un comentario de tu compra.</p>

        <a href="Comentario.php" class="pink-text">Enviar Mensaje..</a>
      </div>


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