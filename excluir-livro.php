<?php
    include "conexao.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `livros` WHERE id='$id'";


    if(mysqli_query($conn, $sql)){
        header('Location: livros.php');
    }

    mysqli_close($conn);
?>