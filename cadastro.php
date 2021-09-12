<?php
    include "conexao.php";
    $name =  $_REQUEST['name'];
    $description =  $_REQUEST['description'];
    $author =  $_REQUEST['author'];

    $sql = "INSERT INTO `livros`(`name`, `description`, `author`) VALUES ('$name','$description','$author')";

    if(mysqli_query($conn, $sql)){
        header('Location: livros.php');
    }

    mysqli_close($conn);
?>