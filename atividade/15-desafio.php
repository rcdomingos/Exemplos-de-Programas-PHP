<!-- Tente criar uma única função que consiga calcular qualquer um dos perímetros (opcional). -->

<?php
function perimetro ($a=0, $b=0, $c=0, $B=0){
  if($B != 0){
    // trapezio
    $p = $a + $b + $c + $B;
    echo "Perimetro do Trapezio = ".$p;

  } elseif ($b != 0) {
    // retangulo e paralelogramo
    $p = 2*($a+$b);
    echo "Perimetro do retangulo/paralelogramo = ".$p;
  }else {
    //quadrado
    $p = 4*$a;
    echo "Perimetro do quadrado = ".$p;
  }
}
perimetro(3,4,5,10);
?>
