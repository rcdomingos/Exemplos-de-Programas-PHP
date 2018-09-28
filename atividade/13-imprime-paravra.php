<!-- 13.	Usando ainda o nome do imperador, use o PHP para imprimir cada nome em
uma linha diferente de uma página (um nome abaixo do outro). -->

<?php

  $nome ="Pedro de Alcantara Francisco Antonio Joao Carlos Xavier de Paula Miguel Rafael Joaquim Jose Gonzaga Pascoal Cipriano Serafim de Braganca e Bourbon";

  for ($i=0; $i < strlen($nome); $i++) {
    if (substr($nome,$i,1)!=" ") {
      echo substr($nome,$i,1);
    } else {
      echo "<br>";
    }
  }

?>
