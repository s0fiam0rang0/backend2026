<?php require_once 'conecta.php'; ?>
<link rel='stylesheet' href="insere.css">

<h2>Cadastrar Funcionário</h2>

<form method="POST" action="insere_func.php">
    <input type="text" name="nome" placeholder="Nome completo" required><br><br>
    <input type="text" name="cpf" placeholder="CPF" required><br><br>
    <input type="email" name="email" placeholder="E-mail" required><br><br>
    <input type="text" name="cargo" placeholder="Cargo" required><br><br>
    <input type="text" name="telefone" placeholder="Telefone"><br><br>
    <div class='salvar'><button type="submit">Salvar</button></div>
</form>

<?php include_once 'footer.php'; ?>