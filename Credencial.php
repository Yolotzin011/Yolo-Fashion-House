<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Credencial de Cliente</title>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url('ts.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
  }
  .cajaFormulario {
    float: left;
    border: 2px solid #FF1493;
    padding: 30px;
    margin: 5px;
    width: 300px;
    height: auto;
    background-color: white;
  }
  .cajaCredencial {
    border: 2px solid #FF1493;
    border-radius: 10px;
    float: left;
    width: 300px;
    height: auto;
    background-color: white;
    padding: 30px;
    margin: 5px;
    text-align: center;
  }
  @media print {
    .no-print {
      display: none;
    }
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

</head>
<body>
  <header class="no-print">
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


  <div class="container">
  <div class="cajaFormulario no-print">
    <img src="yfh.jpg" width="250px" height="90">
    <h5>Crea tu credencial para visitar la tienda</h5>
    <form class="col s12"  action = "contactoBD.php" method="POST" enctype="multipart/form-data">
       <div class="input-field">
      <input type="text" id="idClientetxt" placeholder="ID Cliente" onkeyup="mostrarID(this.value)"><br>
       </div>
       <div class="input-field">
      <input type="text" id="nombretxt" placeholder="Nombre" onkeyup="mostrarNombre(this.value)"><br>
    </div>

      <div class="file-field input-field">
      <div class="btn #f06292 pink lighten-2">
        <span>Foto</span>
        <input type="file" name="fototxt" id="inputFile1" class="no-print">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
  </div>


  </form>
  <div onclick="printer()" class="no-print">
      <div class="btn #f06292 pink lighten-2">
        <span>Imprimir credencial</span>
      </div>
    </div>
  </div>
  <div class="cajaCredencial">
    <h5>Credencial de Cliente</h5>
    <img id="img1" width="100px" height="100px"><br>
    <div id="IRidCliente" class="pink-text"></div><br>
    <div id="IRnombre" class="pink-text"></div><br>
  </div>
</div>

  <script>
    function init() {
      var inputFile = document.getElementById('inputFile1');
      inputFile.addEventListener('change', mostrarImagen, false);
    }

    function mostrarImagen(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(event) {
        var img = document.getElementById('img1');
        img.src = event.target.result;
      }
      reader.readAsDataURL(file);
    }

    function mostrarID(valor) {
      document.getElementById('IRidCliente').innerText = 'ID Cliente: ' + valor;
    }

    function mostrarNombre(valor) {
      document.getElementById('IRnombre').innerText = 'Nombre: ' + valor;
    }

    function printer() {
      window.print();
    }

    window.addEventListener('load', init, false);

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });

  </script>

</body>
</html>