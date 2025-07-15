<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="frase" placeholder="Digite algo" required>
    <button type="submit" name="enviar">Verificar</button>
</form>

<?php

if(isset($_POST['enviar'])){
    $frase = $_POST['frase'];
    $frase = strtolower($frase);
    $qtdVogais = 0;
    $i = 0;

    while ($i < strlen($frase)) {
    $letra = $frase [$i];
    
    if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $qtdVogais = $qtdVogais + 1;
    }

    $i = $i +1;
    }
    echo "<p>Tem $qtdVogais vogais na frase.</p>";
}
?>

    
</body>
</html>