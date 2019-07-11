<?php

	include("pconect.php");

	$fh = fopen('errphp.txt','w'); // deschidem fisierul in modul citire si scriere 
	
	$tmpjud2 = $_POST['county']; 
    // fwrite($fh, PHP_EOL.'4444:'.$tmpjud2);
	//print_r($_POST['county']);
	//print_r($tmpjud2);
	//$tmpjud2=trim($tmpjud2);
     //fwrite($fh, PHP_EOL.'tmpjud2:'.$tmpjud2);

	//$tmpjud2='Brasov';
	$raspuns = [];
	$cda = "Select dic_county_id, county2 from dic_county where county = '$tmpjud2'";

	//fwrite($fh, PHP_EOL.'cda:'.$cda);

	if ($rez=mysqli_query($cnx,$cda)) { //555
	   // Se preiau liniile pe rand
	   while ($linie = mysqli_fetch_assoc($rez)) {  //44
		 $raspuns[] = $linie;
	$jud2=$raspuns[0]["county2"]	; 
	$jud_id=$raspuns[0]["dic_county_id"];
			}  //44
		} //55
		
//  selectez localitatile corespunzatoare  judetului ales

    $raspuns2 = [];
	$cda2 = "Select dic_city_id, city from dic_city where county2='$jud2' ";
	//fwrite($fh, PHP_EOL.'dic_ity_id:'.$cda);
	if ($rez2=mysqli_query($cnx,$cda2)) {
	   // Se preiau liniile pe rand
	   while ($linie2 = mysqli_fetch_assoc($rez2)) {
		 $raspuns2[] = $linie2;
		 //print_r($linie2);
		 //print_r("-----");
		//fwrite($fh, PHP_EOL.'city_id:'.$linie);
	  }
	}



	// Eliberez memoria ocupata de multimea de selectie
	mysqli_free_result($rez);
	mysqli_free_result($rez2);

	// Inchid conexiunea cu serverul MySQL
	mysqli_close($cnx);
//fwrite($fh, PHP_EOL.'raspuns:'.$raspuns);

	//fclose($fh);// inchidem fisierul
	//print_r('$raspuns');

	echo json_encode($raspuns2);
?>