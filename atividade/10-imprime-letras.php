<!-- 10.Dado a expressão “NÓIS TUDO LOKO POR PHP”, elabore o código que imprima
em uma página uma letra abaixo da outra. -->

<?php
  $frase = "NOIS TUDO LOKO POR PHP";
  $ctd = strlen ($frase);

  for ($i=0; $i < $ctd; $i++) {
    echo substr($frase,$i,1);
    echo "<br>";
   }

?>
