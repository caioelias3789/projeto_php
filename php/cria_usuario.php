<?php

require("conecctor.php"); 

const COLUNA_SENHA_DB = 'senha'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $sobrenome = trim($_POST["sobrenome"]);
    $email = trim($_POST["email"]);
    $senha_pura = $_POST["senha"];

    $senha_hash = password_hash($senha_pura, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (nome, sobrenome, email, " . COLUNA_SENHA_DB . ") 
              VALUES (?, ?, ?, ?)";
    
    try {
        $stmt = $pdo->prepare($query);
 
        $stmt->execute([$nome, $sobrenome, $email, $senha_hash]); 
        
        echo "Usuário **cadastrado** com sucesso!";

    } catch (\PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Erro: Este **e-mail já está cadastrado**.";
        } else {

            echo "Erro ao cadastrar. Detalhes: " . $e->getMessage();
        }
    }

} else {
    
}
?>