<?php
$numMaior = 0;
$numMenor = 100;

for ($i = 0; $i < 100; $i++) {
    $num[$i] = rand(0, 100);
    if ($numMaior < $num[$i]) {
        $numMaior = $num[$i];
    }
    if ($num[$i] < $numMenor) {
        $numMenor = $num[$i];
    }
}
// print_r($num);
echo 'O MAIOR numero gerado foi: ' . $numMaior . ' e o MENOR numero gerado foi: ' . $numMenor;

?>
