<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <label>Digite uma palavra:</label>
    <input type="text" name="palavra" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

 <?php

 if (isset($_POST['verificar'])) {
    $palavra = $_POST['palavra'];
    $aoContrario =strrev($palavra);

    if ($palavra == $aoContrario){
       echo "<p>A palavra '$palavra' é um palíndromo.</p>";
    } else {
        echo "<p>A palavra '$palavra' não é um palíndromo.</p>";

    }
}
?>


    
</body>
</html>