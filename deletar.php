<?php
require_once 'conexao.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "Usuário não especificado!";
    exit;
}

$pdo = (new Conexao())->conectar();

// Deleta o usuário pelo ID
$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);

if ($stmt->execute()) {
    // Redireciona de volta para a lista
    echo "<script>
        alert('Usuário excluído com sucesso!');
        window.location.href = 'listar.php';
    </script>";
} else {
    echo "<script>
        alert('Erro ao excluir usuário!');
        window.location.href = 'listar.php';
    </script>";
}
?>