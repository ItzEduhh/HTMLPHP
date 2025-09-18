<?php
function limpar($v){ 
    return htmlspecialchars(trim($v)); 
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
    http_response_code(405); 
    exit('Método inválido'); 
}

$nome = limpar($_POST['nome'] ?? '');
$idade = (int)($_POST['idade'] ?? 0);
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);

$erros = [];
if ($nome === '') $erros[]='Nome obrigatório';
if ($idade <= 0) $erros[]='Idade inválida';
if (!$email) $erros[]='Email inválido';
?>

<!doctype html>
<meta charset="utf-8">
<title>Resultado</title>

<?php 
if ($erros): 
?>

  <h2>Corrija:</h2>

<ul>
<?php 
foreach($erros as $e) echo "<li>$e</li>"; 
?>
</ul>

  <p><a href="login.php">Voltar</a></p>

<?php 
    else: 
?>

  <h2>Dados recebidos</h2>

  <p>Nome: <?= $nome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Email: <?= htmlspecialchars($_POST['email']) ?></p>

<?php 
    endif; 
?>