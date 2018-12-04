<!-- 6. Jogo do acerte um número (1 em 10). Crie um formulário para que o usuário digite um número (0-10), 
depois em uma página em PHP crie um array com 10 números inteiros, verifique se o número digitado pelo 
usuário aparece na relação. Em caso positivo informe a posição deste número no array. -->
<?php
$numero = $_POST['numero'];
for ($i = 0; $i < 10; $i++) {
    $sorteio[$i] = rand(1, 10);
}
foreach ($sorteio as $key => $value) {
    if ($value == $numero) {
        echo "O numero " . $numero . " apareceu na posicao: " . $key . " do vetor. <br>";
    }
}
?>
