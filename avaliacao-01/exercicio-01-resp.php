<h2>RESULTADO</h2>
<?php
  $nome =  explode(" ", $_POST['nome']);
  echo strtoupper($nome[count($nome)-1]).", ";

  for($i=0; $i < (count($nome)-1); $i++){
    echo $nome[$i]." ";
  }
    echo " - ".date(Y)."<br>";
 ?>
<br><br>
<a href="exercicio-01-form.php">Voltar</a>
