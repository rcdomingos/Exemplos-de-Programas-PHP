<!-- 2. OBJETIVO = Refazer o exercício 01. Implemente no vetor o índice com a sigla do estado, exemplo: “SP”=>”São Paulo”.
Carregue este índice no value do Option. -->
<form>
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
</form>
