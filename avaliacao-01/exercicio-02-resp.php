<h2>RESULTADO</h2>
<?php
  $numero = $_POST['numero'];
  if ($numero < 0 or $numero > 100) {
    echo "O numero $numero esta incorreto porque fora da <b>faixa solicitada</b> ";
  }else {
    echo "O numero $numero esta correto ";
  }

  if ($numero%2 ==0) {
    echo "e é um numero Par.<br>";
  } else {
    echo "e é um numero impar.<br>";
  }

 ?>
<br><br>
<a href="exercicio-02-form.php">Voltar</a>
