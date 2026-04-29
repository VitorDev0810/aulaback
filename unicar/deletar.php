<?php
require('conexao.php');
try {
    $id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
    $sql = "DELETE FROM `cadastro` WHERE id = $id";
    $statement = $pdo->query($sql);
    header('location:/');
} catch (PDOException $e) {
    echo 'Ops! Aconteceu um erro :' . $e->getMessage();
    exit();
}
