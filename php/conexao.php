<?php 
    //Database informations
    $hostname = "localhost";
    $database = "ellos_design";
    $user = "root";
    $password = "";

    $connection = mysqli_connect($hostname, $user, $password, $database);

    if (!$connection) {
        echo "Não foi possível conectar!";
    }
?>