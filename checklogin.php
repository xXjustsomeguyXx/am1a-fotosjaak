<?php
	//check of beide velden zijn ingevoerd
	if (!empty($_POST['email'])&& !empty($_POST['password']))
	{
		include('./connect_db.php');
		$query = "SELECT * 
				  FROM  `users`
				  WHERE `email`    = '".$_POST['email']."'
				  AND   `password` = '".$_POST['password']."'";
		//echo $query;
		//vuur de query af op de database
		$result = mysql_query($query, $db);
		if (mysql_num_rows($result) > 0)
		{
		//verwijs door naar de homepage van de geregistreerde gebruiker
		//echo "record bestaat in database";
		$record = mysql_fetch_array($result);
		$_SESSION['id'] = $record['id']; 
		$_SESSION[ 'userrole' ] = $record [ 'userrole'];
		
		switch ($record['userrole'])
		{
			case 'root':
						header("location:index.php?content=root_homepage");
			break;
			
			case 'admin':
						header("location:index.php?content=admin_homepage");
			break;
			
			case 'customer';
					header("location:index.php?content=customer_homepage");
			break;
		
		}
		//header("location:index.php?content=download_page");
	}
	else
	{
		//blijkbaar is het record niet gevonden in de database
		echo "De ingevoerde combinatie van gebruikersnaam - wachtwoord is ons niet bekend. U wordt doorgestuurd naar de inlog pagina";
		header("refresh:4; url=index.php?content=login_form");
		}
	}
	else
	{
		echo 'U heeft beide of een van beide velden niet ingevuld u wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}
?>