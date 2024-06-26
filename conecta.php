<?php
    $servername = "localhost";
    $database = "projeto";
    $username = "root";
    $password = "";

    
    $conn = mysqli_connect ($servername, $username, $password, $database);

    if (!$conn -> connect_error) {
        die("Conexão falhou. Erro: " . $conn->connect_error());
    }
    ?>