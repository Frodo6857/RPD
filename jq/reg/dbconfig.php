<?php


	$db_host = "mysql51.websupport.sk";
	$db_name = "hoksoftrpd";
	$db_user = "hoksoftrpd";
	$db_pass = "A4b3C2d1";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};port=3309;dbname={$db_name}",$db_user,$db_pass);
		//$connection = new PDO("mysql:host=mysql51.websupport.sk;dbname=hoksoftrpd", "hoksoftrpd", "A4b3C2d1");
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>