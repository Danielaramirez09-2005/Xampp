<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios: Numeros pares e impares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body class="bg-primary">
    <div class="d-flex justify-content-center">
        <div class="col-md-8 border p-4 my-5 bg-white">
            <?php
                if (isset($_GET['confirm'])){
                    if($_GET['confirm'] === "1"){
                        echo '<div class="alert alert-success" role="alert">
                        Es un número par
                        </div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">
                        Es un número impar
                        </div>';
                    }
                }
            ?>
            <form action="./metodoEjercicio.php" method="POST">
                <div>
                    <h1 class="d-flex justify-content-center text-dark">Verificación de un número</h1>
                </div>
                    <div class="form-group">
                    <label for="number">Número</label>
                    <input type="number" class="form-control" id="number" name="number">
                </div>
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>