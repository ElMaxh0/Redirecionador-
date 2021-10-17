<?php
$cad = $_GET['r'];
$pesquisar = $_GET['redirect'];
$strcon = mysqli_connect('HOST','DBUSR','PASS','ENCURTAURL_DBNAME') or die('Erro ao conectar ao banco de dados');
echo $pesquisar;
$result_redirect = "SELECT * FROM encurtaurl WHERE EncrtaUrl LIKE '%$pesquisar%' LIMIT 1";
$resultado_redirect = mysqli_query($strcon, $result_redirect);
$redirecturl =$rows_redirect['URL'];
while($rows_redirect = mysqli_fetch_array($resultado_redirect)){
         echo "<tr>";
         echo 'Redirecionando Voce a Url :';
		echo "<td>".$rows_redirect['URL']."<br></td>";
        $REDIRUR = $rows_redirect['URL'];
	}
?>
<meta http-equiv="refresh" content="5; URL='https://<?= $REDIRUR ?>'"/>
