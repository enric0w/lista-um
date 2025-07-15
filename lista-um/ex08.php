<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="">
        <label for="digita_numero">Quantos pares tem entre o número informado?</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="verificar_digitado">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_digitado'])){
        $numero = $_POST['digita_numero'];
        $i=1;
        $quantidade_pares = 0;

         while ($i <= $numero) {
            if ($i % 2 == 0) {
                $quantidade_pares++;
            }
            $i++;
        }



       echo "<p> Existem  <strong>$quantidade_pares</strong> números pares entre 1 e $numero.</p>";
    }
}
    ?>
    
    
</body>
</html>