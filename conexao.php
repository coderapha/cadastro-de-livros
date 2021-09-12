<?php
    $servername = "localhost";
    $database = "cadastro-de-livros";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexão falhou " . mysqli_connect_error());
    }

    // echo "conectado com sucesso";