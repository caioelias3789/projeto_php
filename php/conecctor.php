<?php
$host = 'localhost';
$db   = 'usuario'; 
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
     die("Erro de conexão com o Banco de Dados: " . $e->getMessage());
}
?>