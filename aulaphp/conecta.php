<?php
$host = 'localhost'; //$host = onde está o banco
$db = 'aulaphp'; //nome do banco 
$user = 'root';     //pessoa que criou o banco
$pass = ''; //senha do banco (padrão XAMPP localhost)
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,               //representa a conexão com o banco
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC          
    ]);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>