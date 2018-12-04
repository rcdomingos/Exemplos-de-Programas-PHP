<!--3.OBJETIVO =  Usando o exercício 02, crie uma página que receba a informação do
formulário e mostre a sigla da cidade escolhida no option. -->
<form action="exercicio-3-rec.php" method="post">
  <caption>Estado:</caption>
  <select name="estados">
  <?php
    $estado =  array("AC"	=> "Acre","AL" => "Alagoas","AP" => "Amapá","AM"	=> "Amazonas","BA"	=> "Bahia", "CE"	=> "Ceará",
    "DF"	=> "Distrito Federal","ES"	=> "Espírito Santo","GO"	=> "Goiás","MA"	=> "Maranhão",
    "MT"	=> "Mato Grosso","MS"	=> "Mato Grosso do Sul","MG"	=> "Minas Gerais","PA"	=> "Pará","PB"	=> "Paraíba",
    "PR"	=> "Paraná","PE"	=> "Pernambuco","PI"	=> "Piauí","RJ"	=> "Rio de Janeiro",
    "RN"	=> "Rio Grande do Norte","RS"	=> "Rio Grande do Sul","RO"	=> "Rondônia","RR"	=> "Roraima","SC"	=> "Santa Catarina",
    "SP"	=> "São Paulo","SE"	=> "Sergipe","TO"	=> "Tocantins");

    foreach ($estado as $key => $value){
      echo "<option value =" .$key .">" .$value ."</option>";
    }
 ?>

  </select>
  <input type="Submit" value="Enviar">
</form>
