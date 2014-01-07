<uL> 
	
	<li>
		<a href="index.php?content=Homepage"><b>home</b></a>
	</li>
<?php if ( isset($_SESSION[ 'userrole' ]))
		{
				echo "	<li>
							<a href='index.php?content=logout'><b>uitloggen</b></a>
							</li>";
				switch ($_SESSION[ 'userrole' ])
				{
					case 'customer':
						echo "<li>
								<a href='index.php?content=download_page'><b>Download Game</b></a>
							  </li>";
						echo "<li>
								<a href='index.php?content=customer_homepage'><b>customer home</b></a>
							  </li>";
						echo "<li>
								<a href='index.php?content=faqpage'><b>FAQ</b></a>
							  </li>";
					break;
					case 'administrator':
					echo 	  "<li>
								<a herf=''>admin-link</a>
							   <li>";
					break;
					
					case 'root':
						echo "<li>
								<a href='index.php?content=developer_homepage'>dev-home</a>
							  <li>";
							  
					case 'developer':
						echo "<li>
								<a herf=''>extradevlink</a>
							  <li>";
					break;
					
					case 'photographer':
						echo "<li>
								<a herf=''>pho-link</a>
							  <li>";
					
				}
		}
		else
		{
			echo "
					<li>
					<a href='index.php?content=login_form'><b>Inloggen</b></a>
					</li>
					<li>
					<a href='index.php?content=Register_form'><b>registratie</b></a>
					</li>";
		}
?>
</font>
</uL>