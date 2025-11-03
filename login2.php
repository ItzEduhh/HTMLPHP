<?php if (!empty($mensagem)): ?>
    <p style="color:red;"><?= $mensagem ?></p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba de login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login2.css">
</head>

<body>

    <?php include "pages/header.php"?>

    <div id=login2>
        <h1>Adicionar conta</h1>

        <form action="receber.php" method="POST">
            <input name="nome" type="text" placeholder="Nome de usuário"><br><br>
            <input name="email" type="email" placeholder="Email"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

<script>

</script>
</html>