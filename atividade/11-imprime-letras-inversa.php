<!-- 11.	Usando a expressão do exercício 10, mostra a expressão de trás para
frente,exemplo: PHP ROP OKOL ....”. -->

<?php
  $frase = "NOIS TUDO LOKO POR PHP";
  $ctd = strlen ($frase);
  $n1 = strlen($frase)-1;

  for ($i=0; $i < $ctd; $i++) {
    echo substr($frase,$n1,1);
    echo "<br>";
    $n1--;
   }
?>
