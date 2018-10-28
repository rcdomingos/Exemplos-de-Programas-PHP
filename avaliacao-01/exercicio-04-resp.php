<!-- 4. Refazer o exercício 03, 
mas agora mostre uma foto de acordo com o estado do usuário. Cuidado com a FOTO !!!!!  -->

<h2>RESULTADO</h2>
<?php
  $nome = $_POST['nome'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc = $peso /($altura * $altura);
  echo $nome ."<br><br>";
  if ($imc < 18.5) {
    echo'<img src="https://farm2.staticflickr.com/1911/45554745432_121b88a4cb_o.png" width="245" height="546"  alt="RESULTADO: Abaixo do Peso"> <br>';
  } elseif ($imc >18.5 and $imc <= 25 ) {
    echo'<img src="https://farm2.staticflickr.com/1944/45554745722_59133b1c88_o.png" width="319" height="546" alt="RESULTADO: Peso Normal"> <br>';
  } elseif ($imc >25 and $imc <= 30 ) {
    echo'<img src="https://farm2.staticflickr.com/1975/31732891708_7378ba4680_o.png" width="319" height="546" alt="RESULTADO: Acima do Peso"> <br>';
  } else {
    echo'<img src="https://farm2.staticflickr.com/1920/45554745882_8347580027_o.png" width="319" height="546" alt="RESULTADO: Obeso"> <br>';
  }
 ?>
<br><br>
<a href="exercicio-04-form.php">Voltar</a>
