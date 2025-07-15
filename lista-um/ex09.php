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
   
    $soma=0;

    if($n1 > $n2) {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    for( $i = $n1+ 1; $i < $n2; $i++){
    $soma += $i;
    }

    echo "p>A soma dos números entre <strong>$n1</strong> e <strong>$n2</strong> é: <strong>$soma</strong></p>";

}
?>
    
</body>
</html>
