<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="number" name="num1" placeholder="Primeiro número" required>
    <input type="number" name="num2" placeholder="Segundo número" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if (isset($_POST['verificar'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    $soma1 = 0;
    for ($i = 1; $i < $n1; $i++) {
        if ($n1 % $i == 0) {
            $soma1 += $i;
        }
    }

    $soma2 = 0;
    for ($i = 1; $i < $n2; $i++) {
        if ($n2 % $i == 0) {
            $soma2 += $i;
        }
    }

    if ($soma1 == $n2 && $soma2 == $n1) {
        echo "$n1 e $n2 são números amigos!";
    } else {
        echo "$n1 e $n2 não são números amigos.";
    }
}
?>

    
</body>
</html>