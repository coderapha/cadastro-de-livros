<?php
    include "conexao.php";
    $result = mysqli_query($conn,"SELECT * FROM `livros`");
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
                <span>L</span><span>I</span><span>V</span><span>R</span><span>O</span><span>S</span>
            </h1>
        </div>
    </header>

    <section class="wrapper">
        <table id="tabela-de-alunos">
            <tr>
                <th>Livro</th>
                <th>Descrição</th>
                <th>Autor</th>
            </tr>

            <?php while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['author'] ?></td>
                <td style="text-align:center"><a title="Editar Livro" href="editar-livro.php?id=<?php echo $row['id']; ?>"><span class="material-icons">edit</span></a></td>
                <td style="text-align:center"><a title="Excluir Livro" href="excluir-livro.php?id=<?php echo $row['id']; ?>"><span class="material-icons">delete</span></a></td>
            </tr>

            <?php } mysqli_close($conn); ?>
        </table>
    </section>

    <div id="github">
        <a href="https://github.com/quefoirapha" target="_blank"><img src="./src/images/github2.png" alt="Raphael Cardoso"></a>
    </div>

</body>
</html>