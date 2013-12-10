<?php 
		$userrole = array('root', 'developer');
		include("security.php");
 ?>
 <h3>developer homepage</h3>
Uw id s: <?php echo $_SESSION['id']; ?> <br>
Uw gebruikersrol is: <?php echo $_SESSION ['userrole']; ?>