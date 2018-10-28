<!-- 3. O usuário deverá digitar  Nome, Peso e a Altura.
Ao enviar para a página de resposta:
Calcular o IMC e mostrar o nome do usuário e como está:
“Abaixo do Peso”, “Peso Normal”, etc (ver gráfico)-->

<h2>FORMULARIO</h2>
<p>Calculo do IMC:</p>
<form name="exercicio-03" action="exercicio-03-resp.php" method="post">
  Nome  :
  <input type="text" name="nome"><br>
  Peso  :
  <input type="number" name="peso">Kg<br>
  Altura:
  <input type="number" step="any" name="altura"> metros <br>
  <br><br>
  <input type="submit" value="enviar">
  <input type="reset"  value="limpar">
</form>
