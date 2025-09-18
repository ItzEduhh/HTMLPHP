<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <title>TGCF World FanPage</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    
    <?php include "pages/header.php"?>

    <h1>Cadastro</h1>

    <form action="receber.php" method="post">
        <input type="hidden" name="token" value="death">
        <label></label>
            Nome: <input name="nome" id="nome" >
        </label><br>
        <label>
            Idade: <input name="idade" type="number" min="0" >
        </label><br>
        <label>
            Email: <input name="email" type="email">
        </label><br>
        <button>Enviar</button>
    </form>

    <?php include "pages/footer.php"?>

</body>

<script>
    
</script>

</html>
