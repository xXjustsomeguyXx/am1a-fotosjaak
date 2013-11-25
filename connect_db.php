<?php
	//hier wordt contact gemaakt met de Mysql - server
	$db = mysql_connect("localhost" ,"root", "");
	
	
	
	//hier wordt er een database gekozen op de mysql-server
	mysql_select_db("am1a-fotosjaak", $db) or die ("De database is niet gevonden");
?>