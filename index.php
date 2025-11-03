<?php
session_start();
require_once 'conexao.php';

$error = '';

// Processa o formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));

    if ($nome === '' || $email === '') {
        $error = 'Preencha todos os campos.';
    } else {
        $pdo = (new Conexao())->conectar();

        $sql = "SELECT id, nome, email FROM usuarios WHERE nome = :nome AND email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Login bem-sucedido: guarda dados na sessão
            $_SESSION['user'] = [
                'id' => $usuario['id'],
                'nome' => $usuario['nome'],
                'email' => $usuario['email']
            ];

            // Redireciona para a área interna (listar.php)
            header('Location: index2.php');
            exit;
        } else {
            $error = 'Usuário ou email não encontrados.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login2.css">
</head>
<body>

<?php include 'pages/header.php'; ?>

<div id="login2">
    <h1>Login</h1>

    <?php if ($error): ?>
        <p style="color:#a00;margin-bottom:16px;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <input name="nome" type="text" placeholder="Nome de usuário" value="<?= isset($nome) ? htmlspecialchars($nome) : '' ?>"><br><br>
        <input name="email" type="email" placeholder="Email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>"><br><br>
        <button type="submit">Entrar</button>
    </form>

    <p style="margin-top:12px;">
        Não tem conta? <a href="login2.php">Cadastrar</a><br>
    </p>
</div>

</body>
</html>