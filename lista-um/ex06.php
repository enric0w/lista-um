<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="POST" action="">
        <label for="digita_numero">Verifique o número.</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="verificar_digitado">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_digitado'])){

        $numero = $_POST['digita_numero'];
        $i=1;

            while ($i <= $numero) {
            if ($numero % $i == 0) {
                echo $i . " ";
            }
            $i++;
        };
    };
};
    
?>
</body>
</html>