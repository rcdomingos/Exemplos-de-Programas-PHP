<!-- 5. Crie um formulário para que o usuário digite 04 notas (00,00 até 10,00), 
carregue-as em um array e mostre a sua nota final. 
Indique se está aprovado ou reprovado (média >=6,00 aprovado). -->
<p>Digite 4 notas (00,00 ate 10,00)</p>
<form name="exercicio-05" action="exercicio5-resp.php" method="post">
    Nota 1:<input type="number" max="10" min="0" step="any"  name="nota1"><br>
    Nota 2:<input type="number" max="10" min="0" step="any"  name="nota2"><br>
    Nota 3:<input type="number" max="10" min="0" step="any"  name="nota3"><br>
    Nota 4:<input type="number" max="10" min="0" step="any"  name="nota4"><br>
    <br><br>
    <input type="submit" value="enviar">
    <input type="reset"  value="limpar">
</form>
