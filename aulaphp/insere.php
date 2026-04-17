<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade']]);
        header("Location: relatorio.php?msg=sucesso");
        exit;
    } catch (Exception $e) {
        header("Location: relatorio.php?msg=erro");
    }
}
include_once 'header.php';
?>
<h2>Cadastrar Produto</h2>
<form method="POST">
    <input type="number" name="placa" placeholder="Placa" required><br><br>
    <input type="text" step="0.01" name="Marca" placeholder="Marca" required><br><br>
    <input type="text" name="modelo" placeholder="Modelo" required><br><br>
    <input type="numb34" name="cpf" placeholder="Cpf" required><br><br>
    <button type="submit">Salvar</button>
</form>
<?php include_once 'footer.php'; ?>