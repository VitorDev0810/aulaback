<?php
require('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);
$datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_DEFAULT);

try {
    $sql = "UPDATE `cadastro` SET `nome`='$nome',`sobrenome`='$sobrenome',`datanasc`='$datanasc' WHERE id = $id";
    $statement = $pdo->query($sql);
    header('location:/');
} catch (PDOException $e) {
    echo 'Ops! Aconteceu um erro :' . $e->getMessage();
    exit();
}
