<!DOCTYPE html>
<html lang="ca-ES">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Home</title>
		<meta charset="utf-8"/>
	</head>
	<body>


		<article>
			<h1>Locales donde tomar postres</h1>
			<?php

				//Carguem el fitxer
				if (file_exists('tiendasGourmet_enotecasEuskadi.xml')) {
				    $xml = simplexml_load_file('tiendasGourmet_enotecasEuskadi.xml');
				     
				} else {
				    exit('Error obrint el fitxer tiendasGourmet_enotecasEuskadi.xml.');
				}
				//------------
				$postres = $xml->xpath("/euskadi/row[count(buytype)=Postres"); 
				//------------
			?>
			<!--- -->
			<p>En Euskadi tenemos <?php echo ($postres);?> tiendas donde comprar algo de postre</p>
			
			<p>La lista de locales es:</p>
			<!---  -->
			<table>
			 <?php
				//Carguem la instrucció XPath 
				$locales = $xml->xpath("/euskadi/row/name");

				//Imprimim els resultats
				while(list( , $nodo) = each($locales)) {
				    echo "<tr>";
				    echo "<td>",$nodo,"</td>";
				    echo "</tr>";
				}


				?>
			</table>
			<p>La lista de locales cuyo codigo territorial sea 48:</p>
			<table>
			 <?php
				//Carguem la instrucció XPath
				$costa = $xml->xpath("/euskadi/row/name | /euskadi/row/territory[@territorycode=48] ");

				//Imprimim els resultats
				while(list( , $nodo) = each($costa)) {
				    echo "<tr>";
				    echo "<td>",$nodo,"</td>";
				    echo "</tr>";
				}


				?>					

			</table>

			<!--<?php

				$delegat = $xml->xpath("/classe/alumnes/alumne[@delegat='si']/nom");
				$nota = $xml->xpath("/classe/alumnes/alumne[@delegat='si']/nota");
			?>
			<p>L'alumne delegat és <?php echo $delegat[0];?> i la seva nota és un <?php echo $nota[0];?></p>
			-->

		</article>

	
	</body>
</html>




