<?php

	include("pconect.php");
	$fh = fopen('errphp.txt','w'); // deschidem fisierul in modul citire si scriere 
	$raspuns = [];
	$cda = "Select dic_county_id, county from dic_county";
	fwrite($fh, PHP_EOL.'county_id:'.$cda);
	if ($rez=mysqli_query($cnx,$cda)) {
	   // Se preiau liniile pe rand
	   while ($linie = mysqli_fetch_assoc($rez)) {
		 $raspuns[] = $linie;
		// fwrite($fh, PHP_EOL.'city_id:'.$linie);
	  }
	}

 //fwrite($fh, PHP_EOL.'city_id:'.$linie);

	// Eliberez memoria ocupata de multimea de selectie
	mysqli_free_result($rez);

	// Inchid conexiunea cu serverul MySQL
	mysqli_close($cnx);
	fclose($fh);// inchidem fisierul

	echo json_encode($raspuns);
?>