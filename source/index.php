<?php
$cad = $_GET['r'];
$pesquisar = $_GET['redirect'];
$strcon = mysqli_connect('HOST','DBUSR','PASS','ENCURTAURL_DBNAME') or die('Erro ao conectar ao banco de dados');
echo $pesquisar;
$result_cursos = "SELECT * FROM encurtaurl WHERE EncrtaUrl LIKE '%$pesquisar%' LIMIT 1";
$resultado_cursos = mysqli_query($strcon, $result_cursos);
$redirecturl =$rows_cursos['URL'];
while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
         echo "<tr>";
         echo 'Redirecionando Voce a Url :';
		echo "<td>".$rows_cursos['URL']."<br></td>";
        $REDIRUR = $rows_cursos['URL'];
	}
?>
<meta http-equiv="refresh" content="5; URL='https://<?= $REDIRUR ?>'"/>
