<!-- 6. Jogo do acerte um número (1 em 10). Crie um formulário para que o usuário digite um número (0-10), 
depois em uma página em PHP crie um array com 10 números inteiros, verifique se o número digitado pelo 
usuário aparece na relação. Em caso positivo informe a posição deste número no array. -->
<h1>Jogo do Acerte um numero</h1>
<p>Digite um numero de 1 a 10</p>
<form name="exercicio-06" action="exercicio6-resp.php" method="post">
    Numero:<input type="number" max="10" min="1" step="any"  name="numero"><br>
    <br><br>
    <input type="submit" value="enviar">
    <input type="reset"  value="limpar">
</form>
