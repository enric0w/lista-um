<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="POST" action="">
        <label for="digita_numero">Verifica se é um número positivo, nulo ou negativo.</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="verificar_digitado">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_digitado'])){
        $numero = $_POST['digita_numero'];

        if($numero > 0 ){
        echo "O número é positivo";
        }elseif ($numero == 0){
        echo "o número é nulo";
        } else {
        echo "o número é negativo";
        }
        
    


    };
};

    
        ?>
</body>
</html>    