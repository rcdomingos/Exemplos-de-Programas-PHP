<!-- 8.	Liste em uma página os números de 0 até 100, múltiplos de 5, sendo impressos
alternadamente nas cores azul e vermelho. -->

<?php
 $x = 0;

 while ($x <= 100) {
	 if($x%5==0){
		 if ($x%2==0){
			 echo "<b style='color:red'> $x <b></br>";
		 }else {
			 echo "<b style='color:blue'> $x <b></br>";
		 }
		 }
		 $x++;
 }

?>
