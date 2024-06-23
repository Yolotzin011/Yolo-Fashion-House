<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
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


    <style>
        .product-detail-card {
            display: flex;
            align-items: flex-start;
            background-color: #FF69B4;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .card-image img {
            width: 200px; 
            height: 250px;
            margin-right: 20px;
        }

        .card-content {
            flex: 1;
        }

        .card-title {
            margin-bottom: 20px;
        }
        footer {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
    .page-footer{
       background-color: #FF69B4;
    }
    section {
      padding: 50px 20px;
      text-align: left;
    }
    .sidenav a {
      color: #000;
    }.nav-wrapper a {
      color: #fff;
    }
     header .brand-logo {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
    } header {
      background-color: #FF69B4;
      color: #fff;
      padding: 20px 0;
      text-align: center;
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
    <section id="Comprar" class="section">
        <div class="container">
            <h2>Detalle del Producto</h2>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card product-detail-card">
                        <div class="card-image">
                            <img src="dress7.jpg" alt="Vestido Elegante" id="product-image">
                        </div>
                        <div class="card-content">
                            <h5 class="card-title">Vestido Elegante</h5>
                            <p>Este sofisticado vestido de satén color aguamarina presenta un diseño de tirantes con escote corazón drapeado. La parte superior del corsé está adornada con intrincados bordados y apliques brillantes, que continúan hacia abajo en la falda. La falda, ajustada hasta la cadera y luego suelta en una caída elegante, incluye una abertura alta que revela una capa interna con detalles bordados. Este vestido es perfecto para eventos formales, destacando tanto por su elegancia como por su toque sensual.</p>
                            
                            </div>
                    </div>
                </div>
            </div>
              <form class="col s12"  action = "comprarBD.php" method="POST" enctype="multipart/form-data">
                <div class="input-field">
          <input id="idA" name="Articulotxt" REQUIRED type="text" class="validate" value="263650">
          <label>id Articulo</label>
        </div>
                <div class="input-field">
          <input id="categoria" name="Categoriatxt" REQUIRED type="text" class="validate" value="Vestido Elegante-Formal">
          <label>Categoria</label>
        </div>
                <div class="input-field">
          <input id="precio" name="Preciotxt" REQUIRED type="text" class="validate" value="$9900.00">
          <label>Precio</label>
        </div>
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
          <input id="direccion" name="Direcciontxt" REQUIRED type="text" class="validate">
          <label>Direccion</label>
          <div class="input-field">
          <input id="email" name="emailtxt" REQUIRED type="text" class="validate">
          <label>Correo electronico</label>
        </div>
        
        <button class="btn waves-effect waves-light black" type="submit" name="action">Finalizar compra
          <i class="material-icons right">send</i>
        </button>
      </form>
        </div>
         
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h4>Compra finalizada</h4>
            <p>Su compra ha sido finalizada exitosamente.</p>
            <p>Tiempo estimado 2 semanas o retire en la tienda presencial.</p>
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