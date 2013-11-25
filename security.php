<?php
	if (!isset($_SESSION['id']))//de persoon is ingelogd
	{
			echo"u bent niet ingelogd en daarom niet bevoegd om deze pagina te bekijken";
			
			header("refresh:5;url=index.php?content=homepage");
			exit();
	}
	else if ( !in_array($_SESSION[ 'userrole' ], $userrole))
	{
		echo "U bent wel ingelogd, maar u bent niet bevoegd deze pagina te bekijken. u wordt doorgestuurd naar uw homepage";
		header("refresh:5; url=index.php?content=".$_SESSION['userrole']."_homepage");
		exit();
	
	}
?>