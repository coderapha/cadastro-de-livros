<?php
    include "conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BALLEBOOKS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./src/styles/style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <h1>
                <span>C</span><span>A</span><span>D</span><span>A</span><span>S</span><span>T</span><span>R</span><span>O</span>
            </h1>
        </div>
    </header>

    <section class="wrapper">
        <form action="cadastro.php" method="post">
            <input type="text" name="name" id="name" placeholder="Nome do Livro"> <br>
            <input type="text" name="description" id="description" placeholder="Descrição"> <br>
            <input type="text" name="author" id="author" placeholder="Autor"> <br>
            <input type="submit" value="CADASTRAR">
        </form>
    </section>
    
    <div id="github">
        <a href="https://github.com/quefoirapha" target="_blank"><img src="./src/images/github2.png" alt="Raphael Cardoso"></a>
    </div>
    
</body>
</html>