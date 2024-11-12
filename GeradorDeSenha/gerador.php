<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha</title>
</head>
<body>
    
<main>
<h1>Gere aqui a sua senha:</h1>
<form action="gerador.php" method="get">
<label for="qntd">Informe a quantidade de números da senha:</label>
<input type="number" name="qntd" id="qntd">
<input type="submit" value="Gerar">
</form>

</main>

<?php 

if (isset($_GET["qntd"]) && is_numeric($_GET["qntd"]) ) {

$tam = (int)$_GET["qntd"];

function gerarsenha($tam) {

$carac = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
$caracsort = str_shuffle($carac);
return substr($caracsort, 0, $tam);

}

$senhaGer = gerarsenha($tam);
echo "<h2> Sua senha gerada é: </h2>";
echo "Sua senha gerada é: $senhaGer";








}



?>

</body>
</html>