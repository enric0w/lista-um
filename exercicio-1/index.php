<?php
$numero = $_POST['numero_par_impar'];

if ($numero % 2 == 0) {
    echo "O número " . $numero . " é PAR.";
} else {
    echo "O número " . $numero . " é ÍMPAR.";
}
?>