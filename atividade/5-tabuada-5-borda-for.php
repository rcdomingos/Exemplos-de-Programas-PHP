<!-- 5.	Repita o exercício 04 e coloque a tabuada dentro de uma tabela. -->
<table border="1px">
<?php
  for($x=1; $x <=10; $x++){
    echo "<tr>";
		echo "<td>5 X $x = ". $x*5 ."</td>";
    echo "</tr>";
	}
?>
