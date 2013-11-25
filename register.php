<?php
	//var_dump($_POST);
	
	//hier wordt contact gemaakt met de Mysql - server
	$db = mysql_connect("localhost" ,"root", "");
	
	
	
	//hier wordt er een database gekozen op de mysql-server
	mysql_select_db("am1a", $db) or die ("De database is niet gevonden");
	
	$sql = "INSERT INTO `users`(`id`,
								`firstname`,
								`infix`,
								`surname`,
								`street`, 
								`housenumber`,
								`address`,
								`zipcode`,
								`birthday`,
								`sex`,
								`civilstats`,
								`favorite_game_type`,
								`favorite_game`,
								`email`,
								`password`,
								`userrole`)
					VALUES		(NULL,
								'".$_POST['firstname']."',
								'".$_POST['infix']."',
								'".$_POST['surname']."',
								'".$_POST['street']."',
								'".$_POST['housenumber']."',
								'".$_POST['address']."',
								'".$_POST['zipcode']."',
								'".$_POST['birthday']."',
								'".$_POST['sex']."',
								'".$_POST['civilstats']."',
								'".$_POST['favorite_game_type']."',
								'".$_POST['favorite_game']."',
								'".$_POST['email']."',
								'".$_POST['password']."',
								'customer')";
								
	//echo $sql;
								
	//hier wordt de sql-query op de database afgevuurd en uitgevoerd.
	mysql_query($sql, $db) or die("de sql-query is niet goed uitgevoerd");
	
	echo "de gegevens zijn succesvol geregistreerd. U wordt doorgestuurd naar de registratiepagina";
	header("refresh:4; url =index.php");
?>	


