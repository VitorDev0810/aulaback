<?php
require('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$sql = "SELECT * FROM `cadastro` WHERE id = $id";
$statement = $pdo->query($sql);
$result = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">

    <a class="btn btn-sm btn-danger mt-2" href="/">Sair</a>

        <form class="form d-flex gap-3 mt-3" action="atualizar.php?id=<?=$result['id']?>" method="post">
            <input value="<?=$result['nome']?>" autocomplete="off" placeholder="Nome" class="form-control" type="text" name="nome">
            <input value="<?=$result['sobrenome']?>" autocomplete="off" placeholder="Sobrenome" class="form-control" type="text" name="sobrenome">
            <input value="<?=$result['datanasc']?>" autocomplete="off" class="form-control" type="date" name="datanasc">
            <input type="submit" value="Atualizar" class="btn btn-sm btn-primary">
        </form>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>