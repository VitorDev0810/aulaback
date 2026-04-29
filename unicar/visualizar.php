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
    <title>Visualização</title>
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
        <div>
            <h4>Dados Cadastrados</h4>
            <a class="btn btn-sm btn-danger" href="/">Sair</a>
        </div>
        <p><b>Nome:</b> <?= $result['nome'] ?></p>
        <p><b>Nome:</b> <?= $result['sobrenome'] ?></p>
        <p><b>Nome:</b> <?= date('d-m-Y', strtotime($result['datanasc'])) ?></p>
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