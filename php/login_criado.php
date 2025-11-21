<?php
session_start();
require("conecctor.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $senha_digitada = $_POST["senha"] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha_digitada, $usuario["senha"])) {
        $_SESSION["usuario"] = $usuario["nome"];
        echo json_encode(["status" => "ok", "nome" => $usuario["nome"]]);
    } else {
        echo json_encode(["status" => "erro"]);
    }
}
?>
