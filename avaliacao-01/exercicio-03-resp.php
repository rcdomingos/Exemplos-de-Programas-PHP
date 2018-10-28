<h2>RESULTADO</h2>
<?php

  $nome = $_POST['nome'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  $imc = $peso /($altura * $altura);

  echo $nome ."<br>";


  if ($imc < 18.5) {
    echo "RESULTADO: Abaixo do Peso <br>";
  } elseif ($imc >18.5 and $imc <= 25 ) {
    echo "RESULTADO: Peso Normal <br>";
  } elseif ($imc >25 and $imc <= 30 ) {
    echo "RESULTADO: Acima do Peso <br>";
  } else {
    echo "RESULTADO: Obeso <br>";
  }

 ?>
<br><br>
<a href="exercicio-03-form.php">Voltar</a>
