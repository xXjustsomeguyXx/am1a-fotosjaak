<?php
		/* als je methoden uit de loginclass wilt gebrukken dan moetje deze class 
		 * eerst toevoegen met require_once
		 * 
		 */
		require_once("class/SessionClass.php");
		$session->logout();
		session_destroy();
		header("location:index.php?content=homepage");
?>