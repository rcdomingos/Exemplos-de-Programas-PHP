<!-- . O usuário deverá digitar o valor de uma temperatura em Graus Celsius.
Ao enviar para a página de resposta:
Mostre esta temperatura convertida para Graus Fahrenheit, e de acordo com a
temperatura deverá estar acompanhado de uma foto representando:
- frio, temperatura abaixo de 20ºCelsius
- moderado, temperatura acima de 20º e abaixo de 35ºCelsius
- quente, temperatura acima de 35ºCelsius -->

<h2>RESULTADO</h2>
<?php
  $temperatura = $_POST['temperatura'];
  $fahrenheit = ($temperatura * 1.8) + 32;

  echo "$fahrenheit °F <br><br>";
  if ($temperatura < 20) {
    echo'<img src="https://farm5.staticflickr.com/4782/40592220352_f1c4d943f9_q.jpg" alt="Frio" width="300" height="300"> <br>';
  }elseif ($temperatura >= 20 and $temperatura < 35) {
    echo'<img src="https://farm5.staticflickr.com/4299/35977109625_b8efb98958_q.jpg"  alt="Moderado" width="300" height="300"> <br>';
  } else {
    echo'<img src="https://farm8.staticflickr.com/7374/9740668624_3645c38dc3_q.jpg" alt="Quente" width="300" height="300"> <br>';
  }
 ?>
<br><br>
<a href="exercicio-05-form.php">Voltar</a>
