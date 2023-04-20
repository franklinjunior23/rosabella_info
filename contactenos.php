<?php
include("./conexionbd/db.php");

session_start();
$consulta = $conexion->prepare("SELECT * FROM `producto`");
$consulta->execute();
$productos_general = $consulta->fetchAll(PDO::FETCH_ASSOC);



$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];
$direccion = $_POST['direccion'];



//INSERT INTO `contacto` (`id`, `nombre`, `numero`, `email`, `mensaje`, `dirección`) VALUES (NULL, 'franko', '9172829292', 'royel@.com', 'hola', 'ate');
$sql = "INSERT INTO contacto (id, nombre , numero,  email , mensaje , dirección ) VALUES (NULL , '$nombre' , '$numero' , '$correo' , '$mensaje', '$direccion' );";
$consulta = $conexion->prepare($sql);
$consulta->execute();

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FLORISTERIA ROSABELLA-COTACTENOS</title>
  <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/encabezado.css">
  <link rel="stylesheet" href="css/contactenos.css">
  
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
  <script async>
    (function(w, d) {
      var h = d.head || d.getElementsByTagName("head")[0];
      var s = d.createElement("script");
      s.setAttribute("type", "text/javascript");
      s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/fd9dd00fa74a2ee160ab34f6370383c1");
      h.appendChild(s);
    })(window, document);
  </script>
  <div class="menu">
    <a href="#" class="logo"><img src="img/LOGO-2.png" alt=""></a>
    <nav class="navbar">

      <a href="index.html" class="active">INICIO</a>
      <a href="ocaciones.html">ARREGLOS</a>
      <a href="catalogo.html">CATALOGO</a>
      <a href="ocaciones.html">OCACIONES</a>
      <a href="contactenos.php">CONTACTENOS</a>

      <a href="carrito.php" class="fs-4 rounded-circle bg-black ps-2 pe-2 pt-1 pb-1 text-light">
        carrito<i class="uil uil-shopping-cart loged-it"></i>
      </a>

    </nav>
    <div class="fas fa-bars"></div>
  </div>

  <section class="cuadro">
    <div class="info-form">
      <h2>Contáctanos</h2>
      <p>Contáctanos atraves de las redes socialesfacebook,instagram ,
        realizamos todo tipo de arreglos. Escribenos al correeo y ¡¡ LLAMA YA
        !! alos numeros en linea</p>
      <a href="#"><i class="fa fa-phone"></i> 947 360 380</a>
      <a href="#"><i class="fa fa-envelope"></i>pedidos@floreriarosabella</a>
      <a href="#"><i class="fa fa-map-marked"></i> av.benavides nro_ 3663
        tienda 19 urb. los rosales santiago de surco 01 Santiago de Surco,
        Peru</a>
      <a href="https://www.facebook.com/FloristeriaRosabella" target="_blank"><i class="fa fa-facebook"></i>FloristeriaRosabella</a>
      <a href="https://instagram.com/rosabellafloristeria?igshid=YmMyMTA2M2Y=">
        <i class="fa fa-instagram"></i>#Rosabellafloristeria</a>
    </div>

    <form action="contactenos.php" method="post">
      NOMBRE
      <input type="text" name="nombre" placeholder="Tu Nombre" class="campo" required>
      NUMERO
      <input type="text" name="numero" placeholder="Tu numero" class="campo" required>
      EMAIL
      <input type="email" name="email" placeholder="Tu Email" class="campo" required>
      DIRECCIÓN
      <input type="text" name="direccion" placeholder="Tu direcion" class="campo" required>
      MENSAJE
      <textarea name="mensaje" placeholder="Tu Mensaje..." required></textarea>
      <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
      <input type="reset" value="borrar" class="btn-enviar">
    </form>

  </section>
  <script src="/js/responsive.js"></script>
</body>

</html>