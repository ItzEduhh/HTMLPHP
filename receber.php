<?php
require_once 'conexao.php';

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($nome && $email) {
    $conexao = new Conexao();
    $pdo = $conexao->conectar();

    $sql = "SELECT * FROM usuarios WHERE nome = :nome AND email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        echo "<h2>Login bem-sucedido! Bem-vindo, {$usuario['nome']}!</h2>";
    } else {
        echo "<h2>Usuário ou email incorretos!</h2>";
    }
} else {
    echo "<h2>Preencha todos os campos!</h2>";
}
?>