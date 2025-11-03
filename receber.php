<?php
require_once 'conexao.php';

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($nome && $email) {
    $conexao = new Conexao();
    $pdo = $conexao->conectar();

    $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()) {
        // Mensagem de sucesso e redirecionamento via JS
        echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário!');</script>";
    }
} else {
    echo "<script>alert('Preencha todos os campos!');</script>";
}
?>