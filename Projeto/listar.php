<?php include 'conexao.php'; ?>

<h2>Dados da Seguradora</h2>

<?php
$sql = "
SELECT 
    p.nome,
    c.placa,
    c.modelo,
    s.codigo_validacao,
    s.status
FROM pessoas p
JOIN carro c ON p.id = c.pessoa_id
JOIN seguro s ON c.id = s.carro_id
";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Nome: " . $row['nome'] . "<br>";
    echo "Carro: " . $row['modelo'] . " (" . $row['placa'] . ")<br>";
    echo "Seguro: " . $row['codigo_validacao'] . "<br>";
    echo "Status: " . $row['status'] . "<br>";
    echo "<hr>";
}
?>