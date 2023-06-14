<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "condominio";
    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error){
        die("Conexão falhou".$conn->connect_error);
    }
    echo "conectado";

?>