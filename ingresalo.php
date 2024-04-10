<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coming Soon - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles2.css" rel="stylesheet" />
    </head>
    <body background="assets/img/WhatsApp Image 2021-06-29 at 11.58.05 AM.jpeg">

        <!-- Background Video-->
         <!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video> -->
        <!-- Masthead-->
       
        <div class="masthead">
            <div class="masthead-content text-white">
                <?php 
                include "navbar.php";
                ?>
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Registro de Instructor</h1>

                    <!-- FORMULARIO-->
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="" method="POST">
                        
        <!-- formulario de inserción-->
        <div class="row input-group-newsletter">
            <div class="row">
                <input class="form-control" id="text" type="number" placeholder="Digita el documento" name="cedula" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita el nombre" name="nombre" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita el apellido" name="apellido" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita la profesión" name="profesion" /></div>    
            <div class="row">
                <input class="form-control" id="email" type="number" placeholder="Digita el movil" name="movil" /></div>
            <div class="col-auto"><button class="btn btn-primary" type="submit" name="enviar" value="Registralo">Registralo!</button></div>
        </div>
            
            <!---->
             </form>
        </div>
      </div>
    </div>
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
<?php
    include "guardarintructor.php";
?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>

