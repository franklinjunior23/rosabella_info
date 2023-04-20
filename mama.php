<?php
include "./conexionbd/db.php";
session_start();
$consulta = $conexion->prepare("SELECT * FROM `carrito`");
$consulta->execute();
$productos_general = $consulta->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/sass.css">
    <link rel="stylesheet" href="./css/sass.css.map">
    <link rel="stylesheet" href="css/encabezado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>TIENDA -FLORISTERIA ROSABELLA</title>
</head>

<body>
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

    </div>
    </header>
    <main class="contenedor-responsive">


        <section class="contenedor-carrito">

            <?php foreach ($productos_general as $producto) { ?>
                <div class="contenedor-item-carrito ">
                    <div class="cntn-imagen">
                        <img class="mx-auto d-block" src="./img/<?php echo $producto['imagen'] ?>" alt="">
                    </div>
                    <h1 class="fs-3 mt-3  mb-3 text-capitalize"><?php echo $producto['nombre'] ?></h1>
                    <div class="d-flex justify-content-between align-items-center mt-3 ">
                        <span class="fs-3"> <?php echo "S/ " . number_format($producto['precio'], "2", ",", "$") ?></span>
                        <button data-id="<?php echo $producto['id'] ?>" class=" btn btn-dark button-agregar text-white ps-3 pe-3 fs-5">
                            <i class="uil uil-shopping-cart"></i>Añadir carrito
                        </button>
                    </div>
                </div>
            <?php } ?>

        </section>

    </main>


    <script src="./js/main.js"></script>
    <script src="/js/responsive.js"></script>

</body>

</html>