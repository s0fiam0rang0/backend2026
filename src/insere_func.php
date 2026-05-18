<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO funcionarios 
            (nome, cpf, email, cargo, telefone) 
            VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['email'],
            $_POST['cargo'],
            $_POST['telefone']
        ]);
        header("Location: lista_fun.php?msg=sucesso");
        exit;
    } catch (Exception $e) {
        header("Location: cadastro_func.php?msg=erro");
        exit;
    }
}
?>