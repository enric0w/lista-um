<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <label for="digita_numero">Verifica se é par ou impar:</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="numero_digitado">Verificar</button>
   </form>


   <?php

   if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_POST['numero_digitado'])){
         $numero = $_POST['digita_numero'];
         if($numero %2 == 0){
        echo " O número  par";

         }else{ 
        echo " O número é impar";

         };
    };





   };
 ?>

    
</body>
</html>