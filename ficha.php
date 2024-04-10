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
<body background="assets/img/bg-mobile-fallback.jpeg">

<?php

include "conexion.php";

$query="SELECT cedula,nombre,apellido FROM instructor";
$consulta=$pdo->prepare($query);
$consulta->execute();
// $datos=$consulta->fetch();

?>
        <!-- Background Video-->
         <!-- <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video> -->
        <!-- Masthead-->
       
        <div class="masthead">
            <div class="masthead-content text-white">
                <?php 
                include "navbar.php";
                ?>
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Registro de Ficha</h1>

                    <!-- FORMULARIO-->
    <form id="contactForm" action="" method="POST">
                        
        <!-- formulario de inserción-->
        
          <div class="row">
          <select required class="form-control form-control-lg" name="cedula" >
            <option value="">Selecciona un instructor</option>
            <?php 
            foreach ($consulta as $r) {
             echo "<option value=".$r[0]." >".$r[1]." ".$r[2]."</option>";
            }
            ?>                  
          </select>
          </div>  
        
        <div class="row input-group-newsletter">
            <div class="row">
                <input class="form-control" id="text" type="number" placeholder="Digita el numero de ficha" name="numero" required="" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita el programa" name="programa" required="" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita la institución" name="institucion" required="" /></div>
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita el municipio" name="municipio" required="" /></div>    
            <div class="row">
                <input class="form-control" id="email" type="text" placeholder="Digita el día" name="dia" required="" /></div>    
            <div class="row">
              <select id="inputState" class="form-control form-control-lg" name="jornada" required="">
                <option selected>Escoje la Jornada</option>
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
              </select>
            </div>

            <div class="col-auto"><button class="btn btn-primary" type="submit" name="enviar">Registrala!</button></div>
        </div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3 mt-2">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
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

include "conexion.php";

if (isset($_POST['enviar']) && isset($_POST['cedula']) && isset($_POST['municipio'])) {
    
    $numero= $_POST['numero'];
    $programa= $_POST['programa'];
    $institucion= $_POST['institucion'];
    $municipio= $_POST['municipio'];
    $dia= $_POST['dia'];
    $jornada= $_POST['jornada'];
    $cedula= $_POST['cedula'];

    $query="INSERT INTO ficha(numero,programa,institucion,municipio,dia,jornada)values(?,?,?,?,?,?)"; 
    $consulta=$pdo->prepare($query);
     
        if($consulta->execute(array($numero,$programa,$institucion,$municipio,$dia,$jornada))){

            $query2="INSERT INTO Instructor_has_Ficha(Instructor_cedula,Ficha_numero)VALUES(?,?)";
            $consulta2=$pdo->prepare($query2);
            $consulta2->execute(array($cedula,$numero));

              echo "<script>alert('Ficha Registrada Correctamente');
                window.location.href='';
                </script>";
        }else{
              // echo "<script>alert('Ficha Existente.');
              //   window.location.href='';
              //   </script>";
        }
    }else{ 
    echo "Complete los datos";
}

?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>
