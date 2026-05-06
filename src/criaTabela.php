<?php
require_once 'conecta.php';
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0)";
    create table login (
    ID int auto_increment not null ,
    EMAIL varchar (64) not null,
    SENHA varchar (100) not null,
    primary key (ID)
)";

$pdo->exec($sql);
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");