<?php
require('conexao.php');

$sql = "SELECT * FROM `cadastro`";
$statement = $pdo->query($sql);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

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

        <form class="form d-flex gap-3 mt-3" action="cadastrar.php" method="post">
            <input autocomplete="off" placeholder="Nome" class="form-control" type="text" name="nome">
            <input autocomplete="off" placeholder="Sobrenome" class="form-control" type="text" name="sobrenome">
            <input autocomplete="off" class="form-control" type="date" name="datanasc">
            <input type="submit" value="Cadastrar" class="btn btn-sm btn-success">
        </form>

        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row): ?>
                    <tr>
                        <td><?= $row['nome'] ?></td>
                        <td class="d-flex justify-content-end gap-3">
                            <a class="btn btn-sm btn-primary" href="visualizar.php?id=<?= $row['id'] ?>">Ver</a>
                            <a class="btn btn-sm btn-warning" href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                            <a class="btn btn-sm btn-danger" href="deletar.php?id=<?= $row['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

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