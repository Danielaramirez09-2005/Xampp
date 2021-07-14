<?php

include_once('./BDCmateria/config/DBconnect.php');

$conexion = new Database;
$resultado = $conexion->datosMateria();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

  <!-- My styles-->
  <link rel="stylesheet" href="./styles.css" />

  <title>Listado de materias</title>
</head>

<body class="color-background">

  <!-- Barra de navegacion-->

  <nav class="navbar navbar-light bg-light">

    <a class="navbar-brand" href="#">
      <img src="./img/Colegio.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <div class="dropdown">
      <a class="btn btn-ligth dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Estudiantes</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="./index7.html">Ver estudiantes</a>
        <a class="dropdown-item" href="./LMaterias.html">Materias</a>
        <a class="dropdown-item" href="./DDisponibles.html">Archivos</a>
      </div>
    </div>
    <div class="dropdown ml-auto">
      <a class="btn btn-ligth dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Usuario</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Cerrar sesión</a>
      </div>
    </div>

  </nav>


  <!--Contenedor de opciones -->

  <!-- Formulario -->

  <div class="d-flex justify-content-center">
    <div class="col-md-7 border p-4 my-5 bg-white ">
      <div class="card">
        <div class="card-header"></div>
        <div class="d-flex justify-content-between align-items-center">
          <h3>Listado de materias</h3>
          <div class="btn btn-sm">
            <a class="list-group-item list-group-item-action active " id="list-Crear-materia-list" 
              href="./BDCmateria/index.php">Crear Materia</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">
            <form>
              <div class="alert alert-success" role="alert">
                No se pudo realizar la acción, comunicate con el administrador
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>

                    <th scope="col">Nombre</th>
                    <br>
                    <th scope="col">Herramientas</th>

                  </tr>

                </thead>
                <tbody>
                <?php
                        foreach($resultado as $fila){
                         echo '<tr>
                            <td>'.$fila['id'].'</td>
                            <td>'.$fila['nombre'].'</td>
                            <td>
                                <a href="./BDCmateria/config/edit_materias" id='.$fila['id'].'" type="button" class="btn btn-primary">Modificar</a>
                                <a href="#algo" type="button" class="btn btn-danger">Eliminar</a>
                            </td>
                            </tr>';    
                        }
                        ?>
                </tbody>

              </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  <div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
</body>

</html>