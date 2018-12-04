<?php
$linha1 = array(3,2,6);
$linha2 = array(3,3,8);
$linha3 = array(1,2,5);

$matriz= array($linha1,$linha2,$linha3);

$somaDiagonal =$matriz[0][0] + $matriz[1][1] + $matriz[2][2];

echo "Soma diagonal da Matriz = " .$somaDiagonal;
?>
