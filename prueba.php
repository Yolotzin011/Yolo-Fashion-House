<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="path/to/materialize.css">
    <link rel="stylesheet" href="path/to/style.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="prueba.php" class="brand-logo">Tienda de Ropa</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="prueba.php#coleccion">Colección</a></li>
                <li><a href="prueba.php#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section id="detalle-producto" class="section">
        <div class="container">
            <h2 class="center-align">Detalle del Producto</h2>
            <div class="row">
                <div class="col s12 m6 l4 product-detail-card">
                    <div class="card">
                        <div class="card-image">
                            <img src="dress1.jpg" alt="Vestido Elegante" id="product-image">
                            <span class="card-title">Vestido Elegante</span>
                        </div>
                        <div class="card-content">
                            <p>Vestido elegante de alta costura ideal para un evento.</p>
                            <p>Precio: $<span id="product-price">9500.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <h5>Información de Envío</h5>
                    <form>
                        <div class="input-field">
                            <input id="nombre" type="text" class="validate" required>
                            <label for="nombre">Nombre Completo</label>
                        </div>
                        <div class="input-field">
                            <input id="direccion" type="text" class="validate" required>
                            <label for="direccion">Dirección</label>
                        </div>
                        <div class="input-field">
                            <input id="telefono" type="tel" class="validate" required>
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="input-field">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Correo Electrónico</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Tienda de Ropa</h5>
                    <p class="grey-text text-lighten-4">Encuentra la mejor ropa de alta costura en nuestra tienda en línea.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Enlaces</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.html#coleccion">Colección</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.html#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="path/to/materialize.js"></script>
</body>
</html>