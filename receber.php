<?php
function limpar($v){ 
    return htmlspecialchars(trim($v)); 
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
    http_response_code(405); 
    exit('Método inválido'); 
}

$nome = limpar($_POST['nome'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);

$erros = [];

if ($nome === '') $erros[] = 'Nome é obrigatório';
if (!$email) $erros[] = 'Email inválido';

if ($erros):
?>
    <!doctype html>
    <html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Erros de Validação</title>
    </head>
    <body>
        <h2>Corrija os seguintes erros:</h2>
        <ul>
            <?php foreach($erros as $e) echo "<li>$e</li>"; ?>
        </ul>
        <p><a href="login2.php">Voltar</a></p>
    </body>
    </html>

<?php

else:
    header("Location: index.php");
    exit;
endif;
?>