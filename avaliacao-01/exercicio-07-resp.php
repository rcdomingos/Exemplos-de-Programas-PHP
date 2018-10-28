<!-- 7. O usuário deverá digitar 5 números inteiros aleatórios (não é para utilizar array).
Ao enviar para a página de resposta:
Deverá mostrar os números em ordem crescente separados por vírgula. -->

<h2>RESULTADO</h2>
<?php
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];
  $num5 = $_POST['num5'];

  // $num1 = 1;
  // $num2 = 6;
  // $num3 = 88;
  // $num4 = 3;
  // $num5 = 20;

  for ($i=0; $i <= 5; $i++) {
      if ($num1 > $num2) {
        $auxiliar=$num1;
        $num1 = $num2;
        $num2 = $auxiliar;
      }
      if ($num2 > $num3) {
        $auxiliar=$num2;
        $num2 = $num3;
        $num3 = $auxiliar;
      }
      if ($num3 > $num4) {
        $auxiliar=$num3;
        $num3 = $num4;
        $num4 = $auxiliar;
      }
      if ($num4 > $num5) {
        $auxiliar=$num4;
        $num4 = $num5;
        $num5 = $auxiliar;
    }
  }
  // if ($num5 < $num1) {
  //   $auxiliar=$num4;
  //   $num4 = $num5;
  //   $num5 = $auxiliar;
  // }
  //
  echo "ordem crescente: $num1,$num2,$num3,$num4,$num5"
?>
<br><br>
<a href="exercicio-07-form.php">Voltar</a>
