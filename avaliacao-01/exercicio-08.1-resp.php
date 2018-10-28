<!-- 8. O usuário deverá digitar uma palavra.
Ao enviar para a página de resposta:
O sistema deverá informar se esta palavra é um palíndromo, ex: radar, ovo, osso .... -->

<h2>RESULTADO</h2>
<?php
  $palavra = str_split($_POST['palavra']);
  // print_r($palavra);
  $reverso = array_reverse($palavra);
  foreach($reverso as $value){
     $palindromo .= $value;
   }
   if ($palindromo == $_POST['palavra']) {
     echo "<b>A PALAVRA É UM PALINDROMO</b>";
   } else {
    echo "A Palavra NÃO é um PALINDROMO";
   }
?>
<br><br>
<a href="exercicio-08-form.php">Voltar</a>
