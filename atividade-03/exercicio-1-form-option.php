<!-- 1. OBJETIVO = Crie um vetor com todos os estados: Monte uma entrada (option) para o estado usando o vetor para carregá-lo (via Form).
(http://www.suapesquisa.com/geografia/siglas_estados_brasileiros.htm) -->
<form>
  <caption>Estado:</caption>
  <select name="estados">
  <?php
    $estado =  array("Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espírito Santo","Goiás","Maranhão",
    "Mato Grosso","Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí","Rio de Janeiro",
    "Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima","Santa Catarina","São Paulo","Sergipe","Tocantins");

    foreach ($estado as $value)  {
      echo "<option>".$value."</option>";
    }
 ?>
  </select>
</form>
