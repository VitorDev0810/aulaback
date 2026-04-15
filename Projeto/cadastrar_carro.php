<?php include 'conexao.php'; ?>

<?php
if ($_POST) {
    $pessoa_id = $_POST['pessoa_id'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO carro (pessoa_id, placa, marca, modelo, ano)
            VALUES ('$pessoa_id', '$placa', '$marca', '$modelo', '$ano')";

    $conn->query($sql);
    echo "Carro cadastrado!";
}
?>

<form method="POST">
    ID da Pessoa: <input name="pessoa_id"><br>
    Placa: <input name="placa"><br>
    Marca: <input name="marca"><br>
    Modelo: <input name="modelo"><br>
    Ano: <input name="ano"><br>
    <button type="submit">Cadastrar</button>
</form>