<!-- 7. Crie um formulário que o usuário digite 04 números, carregue estes 
números em um array, mostre os números em sua ordem 
de inserção e depois mostre o array trocando os valores de início e fim. -->
<?php
$numero = array($_POST['numero1'], $_POST['numero2'], $_POST['numero3'], $_POST['numero4']);

echo' Numeros na ordem: ';
foreach ($numero as $value) {
    echo $value .', ';
    }

$auxiliar = $numero[0];
$numero[0] = $numero[3];
$numero[3] = $auxiliar;

echo '<br>Numeros alterados: ';
foreach ($numero as $value) {
    echo $value .', ';
    }
?>
