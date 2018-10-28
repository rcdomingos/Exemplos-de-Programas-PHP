<!-- 6. O usuário deverá digitar seu nome completo.
Ao enviar para a página de resposta:
Criar uma conta de e-mail institucional para empresa Fandangos S.A.
O e-mail deverá ser composto pelo primeiro caractere do nome, mais um “ponto”,
sobrenome e um número que representa o total de letras do nome incluindo espaços.-->

<h2>RESULTADO</h2>
<?php
  $nome =  explode(" ", $_POST['nome']);
  echo "E-mail Criado:<br>";
  echo strtolower(substr($nome[0],$n1,1)).".".strtolower($nome[count($nome)-1]) .strlen($_POST['nome'])."@fandangos.com.br";
?>

<br><br>
<a href="exercicio-06-form.php">Voltar</a>
