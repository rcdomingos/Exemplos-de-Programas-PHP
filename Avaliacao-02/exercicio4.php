<!-- 4. Com base no exercício 03, mostre a soma e a média de todos os valores carregados no array. -->
<?php
$numTotal = 0;

for ($i = 0; $i < 100; $i++){  
    $num[$i] = rand(0, 100);
    $numTotal +=  $num[$i];
    }
    $numMedia = $numTotal/count($num);
// print_r($num);
echo 'A SOMA dos numeros gerado foi: ' . $numTotal.'<br>'; 
echo 'A MEDIA dos numeros gerado foi: ' . $numMedia;

?>
