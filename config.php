<?php
    
    $user = "root";
    $name = "onlymarket";
    $pass = "";
    $host = "localhost";

    $conn = mysqli_connect($host,$user, $pass, $name);

    if(!$conn){
        echo("ERROR AL CONECTAR A LA BASE DE DATOS DE DATOS");
    }
?>