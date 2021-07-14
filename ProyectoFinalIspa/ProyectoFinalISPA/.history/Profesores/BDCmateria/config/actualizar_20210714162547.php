<?php

    include_once('./DBconnect.php');

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $conexion = new Database;
        $confirm = $conexion->updateMateria($id, $nombre);
    //header("Location: ../index.php?confirm=".$confirm)
?>