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
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
</head>
<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>

    <!-- Masthead-->
   <div class="masthead">
        <div class="masthead-content text-white">
          <?php
          include "navbar.php";
          ?>
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Buscar al instructor</h1>
                <p class="mb-5">Digita una Ficha, nombre, municipio o programa y encuentra lo que buscas</p>
            </div>    
                    <!-- to get an API token!-->
        <form  action="" method="POST">
            <!-- Email address input-->
            <div class="row input-group-newsletter">
                <div class="col"><input class="form-control" type="text" placeholder="Digitalo" name="buscar" /></div>
                
                <div class="col-auto">
                <a href="#travel">
                    <button class="btn btn-primary" type="submit" data-toggle="travel" data-target="#travel">Encuentralo</button></a></div>
            </div>
         </form>
        </div>
   </div>
<?php
    include "buscarlike.php";
?>

<!-- tabla que muestra los productos consultados por columna -->


  <div class="masthead">
   <div class="masthead-content text-white">
    <div name="travel" id="travel"><h1> buscador </h1></a>
    <table class="table text-white">
        <p class="mb-8">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Número</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Programa</th>
              <th scope="col">Institución</th>
              <th scope="col">Municipio</th>
              <th scope="col">Día</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php 
        if(isset($_POST['buscar'])){ 
            if($consulta->rowCount()>=1){
                while($fila=$consulta->fetch()){ ?>
                <tr>
                  <th scope='row'><?php echo $fila["numero"]?></th>
                  <td><?php echo $fila['nombre']?></td>
                  <td><?php echo $fila['apellido']?></td>
                  <td><?php echo $fila['programa']?></td>
                  <td><?php echo $fila['institucion']?></td>
                  <td><?php echo $fila['municipio']?></td>
                  <td><?php echo $fila['dia']?></td>
                  <td><!-- <a href="../vistas/actualizar.php?id=<?php //echo $fila["numero"]?>">Editar </a> -->
                    <!-- <a href="../controlador/Eliminarprod.php?id=<?php //echo $fila["numero"]?>" onclick="return Confirmar()"> Eliminar</a--></td> 
                 </tr>
                <?php       
            }   
            }else{
                echo "No hay resultados para esa busqueda";
            }
        }else{
            echo "Esperando criterio de busqueda";
        }
    ?>     
        </tbody>
    </table>
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


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
