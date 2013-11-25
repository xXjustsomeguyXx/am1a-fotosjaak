<?php
		$userrole = array ('root', 'admin', 'customer');
		include("security.php"); 
?>

<h3>Administrator homepage</h3>
Uw id s: <?php echo $_SESSION['id']; ?>  <br>
Uw gebruikersrol is: <?php echo $_SESSION ['userrole']; ?>