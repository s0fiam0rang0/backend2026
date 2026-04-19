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
<link rel='stylesheet' href="insere.css">
<h2>Cadastrar Bebida</h2>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required><br><br>
    <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>
    <div class= 'salvar'><button type="submit">Salvar</button></div>
</form>
<?php include_once 'footer.php'; ?>