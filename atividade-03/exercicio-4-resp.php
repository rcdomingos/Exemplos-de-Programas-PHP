<!--
4. OBEJTIVO = JOGO - ACERTE O NÚMERO: 
- Crie um formulário onde o usuário poderá digitar 05 números (0-100);
- Transfira as informações para uma página em PHP;
- Guarde as informações em um vetor;
- Gere um número randômico;
- Compare as informações do vetor com o número gerado;
- Para cada número testado informe: “Acertou” ou “Errou”, informando se é maior ou menor com relação ao número gerado, exemplo:
    • Número 25 – Errou - Menor;
    • Número 18 – Errou - Menor;
    • Número 95 – Errou - Maior;
    • Número 45 – Errou - Menor;
    • Número 78 – Errou - Menor;
- Mostre o vetor na página em ordem;
Exemplo: 18 – 25 – 45 – 78 - 95
- Mostre o vetor novamente (mas incluindo o número sorteado)
Exemplo: 18 – 25 – 45 – 78 – 88 – 95
- O número sorteado deverá sair colorido -->
<h2>Resultado</h2>
<?php
  $numeros = array ($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5'] );
// print_r($numeros);
  $sorteio = rand(0,100);
  echo "Numeros digitados: <br>";
  foreach ($numeros as $value) {
    if ($value == $sorteio) {
      echo "<b>Número: " .$sorteio ." – Acertou</b> <br>";
    }else{
      if ($value > $sorteio) {
        echo "Número: " .$value ." – Errou - Maior <br>";
      }else{
        echo "Número: " .$value ." – Errou - Menor<br>";
      }
    }
  }

  echo "<br>Numeros digitados ordenados: <br>";
  sort($numeros);
  foreach ($numeros as $numordenados) {
    echo $numordenados ." - ";
  }

  echo "<br><br>Numeros digitados mais o sorteado: <br>";
  if (!in_array($sorteio, $numeros)){
    array_push($numeros,$sorteio);
  }
  asort($numeros);
  foreach ($numeros as $numordenados2) {
    if ($numordenados2 == $sorteio){
      echo '<span style="color:red;">' .$numordenados2 .'</span> - ';
    } else{
    echo $numordenados2 ." - ";
    }
  }
 ?>
