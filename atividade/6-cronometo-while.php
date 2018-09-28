<!-- 6.	Usando a instrução while() simule um cronometro de 00:00 até 04:59 (minutos).
Os valores deverão ser apresentados na página um após o outro. -->

<?php
	$mimutos = 0;
	$segundos = 0;
	while ($mimutos < 5){
		while ($segundos < 60){
			echo "$mimutos:$segundos <br>";
			$segundos++;
		}
		$mimutos++;
		$segundos = 0;
	}
?>
