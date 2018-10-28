<!-- 8. O usuário deverá digitar uma palavra.
Ao enviar para a página de resposta:
O sistema deverá informar se esta palavra é um palíndromo, ex: radar, ovo, osso .... -->

<h2>RESULTADO</h2>
<?php
  $palavra = $_POST['palavra'];

  for($id = 0;$id < strlen($palavra); $id++){
  $letras[$id] = substr($palavra,$id,1);
  // echo $letras[$id] ." - ";
  }

  $reverso = array_reverse($letras);
  $comparacao = array_diff($letras, $reverso);

  if($comparacao!= NULL) {
    echo "A PALVRA É UM PALINDROMO";
  } else {
    echo "A PALVRA NAO É UM PALINDROMO";
  }

  print_r($comparacao);
?>
<br><br>
<a href="exercicio-08-form.php">Voltar</a>
