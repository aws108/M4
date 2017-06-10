<!DOCTYPE html>
<html lang="ca-ES">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Home</title>
		<meta charset="utf-8"/>
	</head>
	<body>


		<article>
			<h1>Locales de Euskadi</h1>
			<?php

				//Carguem el fitxer
				if (file_exists('tiendasGourmet_enotecasEuskadi.xml')) {
				    $xml = simplexml_load_file('tiendasGourmet_enotecasEuskadi.xml');
				     
				} else {
				    exit('Error obrint el fitxer tiendasGourmet_enotecasEuskadi.xml.');
				}
				//------------
				$postres = $xml->xpath("/euskadi/row/territory/name/buy[@tipo='Postres'] "); 
				//------------
			?>
			<!--- -->
			<p>1- En Euskadi tenemos <?php echo count($postres);?> tiendas donde comprar algo de postre</p>
			
			<p>2- La lista de locales es:</p>
			<!---  -->
			<table>
			 <?php
				//Carguem la instrucció XPath 
				$locales = $xml->xpath("/euskadi/row/territory/name/buy");

				//Imprimim els resultats
				while(list( , $nodo) = each($locales)) {
				    echo "<tr>";
				    echo "<td>",$nodo,"</td>";
				    echo "</tr>";
				}
			?>
			</table>
			
			<p>3- La lista de locales cuyo codigo territorial sea 48:</p>
			<table>
			 <?php
				//Carguem la instrucció XPath
				$costa = $xml->xpath("/euskadi/row/territory[@territorycode=48]/name/buy");

				//Imprimim els resultats
				while(list( , $nodo) = each($costa)) {
				    echo "<tr>";
				    echo "<td>",$nodo,"</td>";
				    echo "</tr>";
				}
			?>					
			</table>

			
			<table>
			 <?php
				//Carguem la instrucció XPath
				$vasca = $xml->xpath("/euskadi/row/territory/marks[@localizacion='Costa Vasca']");

				
			?>		
			<p>4- En euskadi tenemos <?php echo count($vasca);?> locales que se encuentren en la Costa Vasca:</p>			
			</table>
			
			<table>
			<p>5- Nombre de los locales donde sirven embutido:</p>
			 <?php
				//Carguem la instrucció XPath
				$embutido = $xml->xpath("/euskadi/row/territory/name/buy[@tipo='Embutidos']");

				//Imprimim els resultats
				while(list( , $nodo) = each($embutido)) {
				    echo "<tr>";
				    echo "<td>",$nodo,"</td>";
				    echo "</tr>";
				}
			?>					
			</table>

		</article>

	
	</body>
</html>




