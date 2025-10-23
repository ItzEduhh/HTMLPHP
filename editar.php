<?php
require_once 'conexao.php';

$pdo = (new Conexao())->conectar();
$mensagem = '';

// Pega o ID do usuário via GET
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Usuário não especificado!";
    exit;
}

// Se o formulário foi enviado, atualiza os dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = strtolower(trim($_POST['email'] ?? ''));

    if ($nome && $email) {
        // Verifica se já existe outro usuário com o mesmo email
        $checkSql = "SELECT * FROM usuarios WHERE email = :email AND id != :id";
        $checkStmt = $pdo->prepare($checkSql);
        $checkStmt->bindValue(':email', $email);
        $checkStmt->bindValue(':id', $id);
        $checkStmt->execute();

        if ($checkStmt->fetch(PDO::FETCH_ASSOC)) {
            $mensagem = "Este email já está cadastrado para outro usuário!";
        } else {
            // Atualiza o usuário
            $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':id', $id);

            if ($stmt->execute()) {
                $mensagem = "Usuário atualizado com sucesso!";
            } else {
                $mensagem = "Erro ao atualizar usuário!";
            }
        }
    } else {
        $mensagem = "Preencha todos os campos!";
    }
}

// Pega os dados atuais do usuário para preencher o formulário
$sql = "SELECT * FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo "Usuário não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "pages/header.php"; ?>

<div id="login2">
    <h1>Editar Usuário</h1>

    <?php if ($mensagem): ?>
        <p style="color:red;"><?= $mensagem ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome']) ?>" required><br><br>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required><br><br>
        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="listar.php"><button type="button">Voltar para a lista</button></a>
</div>

</body>
</html>