<?php include 'conexao.php'; ?>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO pessoas (nome, cpf, telefone, email, endereco)
            VALUES ('$nome', '$cpf', '$telefone', '$email', '$endereco')";

    $conn->query($sql);
    echo "Pessoa cadastrada!";
}
?>

<form method="POST">
    Nome: <input name="nome"><br>
    CPF: <input name="cpf"><br>
    Telefone: <input name="telefone"><br>
    Email: <input name="email"><br>
    Endereço: <input name="endereco"><br>
    <button type="submit">Cadastrar</button>
</form>