<?php
require_once 'conecta.php';


$funcionarios = $pdo->query("SELECT * FROM funcionarios ORDER BY nome")->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel='stylesheet' href="relatorio.css">

<h2>Funcionários Cadastrados</h2>
<a href="cadastro_func.php">+ Novo Funcionário</a><br><br>

<?php if (isset($_GET['msg']) && $_GET['msg'] === 'sucesso'): ?>
    <p style="color:green">Funcionário cadastrado com sucesso!</p>
<?php endif; ?>

<table border="1" cellpadding="8" width="100%">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Cargo</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($funcionarios as $f): ?>
    <tr>
        <td><?= htmlspecialchars($f['nome']) ?></td>
        <td><?= htmlspecialchars($f['cpf']) ?></td>
        <td><?= htmlspecialchars($f['email']) ?></td>
        <td><?= htmlspecialchars($f['cargo']) ?></td>
        <td><?= htmlspecialchars($f['telefone']) ?></td>
        <td>
            <a href="exclui_func.php?id=<?= $f['id'] ?>"
               onclick="return confirm('Excluir funcionário?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include_once 'footer.php'; ?>