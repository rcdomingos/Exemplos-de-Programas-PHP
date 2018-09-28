<!-- 14.	Crie uma biblioteca de função em PHP que atenda as operações identificadas,
sendo que a chamada da função deverá representar o elemento que estará sendo
calculado, conforme descrito no exercício. -->
<!-- retangulo(base, altura)
quadrado(lado)
paralelogramo(lado1, lado2)
trapezio(lado1, lado2, lado3, lado4) -->

<?php

function retangulo($h, $b){
 $p = 2*($h+$b);
 return $p;
}

function quadrado ($l){
  $p = 4*$l;
  return $p;
}

function paralelogramo($l1, $l2){
  $p = 2*($l1+$l2);
  return $p;
}

function trapezio($a, $b,$c,$B){
  $p = $a + $b + $c + $B;
  return $p;
}

echo "retangulo = ". retangulo(5, 8)."<br>";
echo "quadrado = ". quadrado(4) ."<br>";
echo "paralelogramo = ". paralelogramo(3, 5) ."<br>";
echo "trapezio = ". trapezio(3, 3,3, 5) ."<br>";

?>
