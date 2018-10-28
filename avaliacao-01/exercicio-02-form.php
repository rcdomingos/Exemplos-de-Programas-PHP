<!-- 2. O usuário deverá digitar um número de 00 (zero) até 100 (cem).
Ao enviar para a página de resposta:
Mostrar se o valor foi digitado corretamente na faixa, ou seja,
emitir erro se for digitado qualquer número abaixo de zero ou maior
de 100 e, informar também se é um número par ou ímpar. -->

<h2>FORMULARIO</h2>
<form name="exercicio-02" action="exercicio-02-resp.php" method="post">
  Digite um Numero de 0 a 100:
  <input type="number" name="numero"> <br>
  <br><br>
  <input type="submit" value="enviar">
  <input type="reset"  value="limpar">
</form>
