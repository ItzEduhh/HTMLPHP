<?php
require_once 'conexao.php';

$conexao = new Conexao();
$pdo = $conexao->conectar();

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lista.css">
</head>
<body>

    <?php include "pages/header.php"; ?>

    <div id="login2">
        <h1>Administradores cadastrados</h1>

        <?php if (count($usuarios) > 0): ?>
            <table border="2" cellpadding="8" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= htmlspecialchars($u['nome']) ?></td>
                        <td><?= htmlspecialchars($u['email']) ?></td>
                        <td>
                            <a href="editar.php?id=<?= $u['id'] ?>">
                    			<button type="button">Editar</button>
                			</a>
                            
                            <a href="deletar.php?id=<?= $u['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                <button type="button">Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        
        <?php else: ?>
            <p>Nenhum usuário cadastrado ainda.</p>
        <?php endif; ?>

        <?php include "pages/footer.php"; ?>
    </div>

</body>
</html>