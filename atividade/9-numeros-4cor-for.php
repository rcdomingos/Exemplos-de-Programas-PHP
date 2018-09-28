<!-- 9.	Repita o exercício número 08, mas utilize 04 cores diferentes
na sequência da impressão, por exemplo: azul, vermelho, verde e amarelo. -->
<?php

$cor = 1;
for ($x=0; $x <= 100 ; $x++) {
	if($x%5==0){
		if ($cor == 1){
			echo "<b style='color:red'> $x <b></br>";
			$cor++;
		} elseif ($cor == 2) {
			echo "<b style='color:blue'> $x <b></br>";
			$cor++;
		} elseif ($cor == 3) {
			echo "<b style='color:green'> $x <b></br>";
			$cor++;
		} elseif ($cor == 4){
			echo "<b style='color:yellow'> $x <b></br>";
			$cor = 1;
		}
	}
}
?>
