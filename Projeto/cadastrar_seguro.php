<?php include 'conexao.php'; ?>

<?php
if ($_POST) {
    $carro_id = $_POST['carro_id'];
    $codigo = $_POST['codigo'];
    $status = $_POST['status'];

    $sql = "INSERT INTO seguro (carro_id, codigo_validacao, status)
            VALUES ('$carro_id', '$codigo', '$status')";

    $conn->query($sql);
    echo "Seguro cadastrado!";
}
?>

<form method="POST">
    ID do Carro: <input name="carro_id"><br>
    Código: <input name="codigo"><br>

    Status:
    <select name="status">
        <option value="pendente">Pendente</option>
        <option value="ativo">Ativo</option>
        <option value="expirado">Expirado</option>
    </select><br>

    <button type="submit">Cadastrar</button>
</form>