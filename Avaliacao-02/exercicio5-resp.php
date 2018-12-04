<!-- 3. Em PHP, crie um programa que gere 100 números randômicos de 001 até 100, 
e mostre o maior e o menor número gerado. -->
<?php
$nota = array($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4']);
$Totalnota = 0;
// print_r($nota);
for ($i = 0; $i < 4; $i++) {
    $Totalnota += $nota[$i];
}
echo 'NOTA FINAL: ' . $Totalnota;
if (($Totalnota / 4) >= 6.00) {
    echo " - APROVADO";
} else {
    echo " - REPROVADO";
}
?>
