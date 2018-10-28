<!-- . O usuário deverá digitar o valor de uma temperatura em Graus Celsius.
Ao enviar para a página de resposta:
Mostre esta temperatura convertida para Graus Fahrenheit, e de acordo com a
temperatura deverá estar acompanhado de uma foto representando:
- frio, temperatura abaixo de 20ºCelsius
- moderado, temperatura acima de 20º e abaixo de 35ºCelsius
- quente, temperatura acima de 35ºCelsius -->

<h2>FORMULARIO</h2>
<p>Conversor de temperatura:Graus Celsius X Graus Fahrenheit</p>
<form name="exercicio-05" action="exercicio-05-resp.php" method="post">

  Temperatura:
  <input type="number" name="temperatura"> °C<br>
  <br><br>
  <input type="submit" value="enviar">
  <input type="reset"  value="limpar">
</form>
