<uL> 
	
	<li>
		<a href="index.php?content=Homepage"><b>home</b></a>
	</li>
	<li>
		<a href="index.php?content=logintest"><b>logintest</b></a>
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
					case 'admin':
					
					break;
					case 'root':
					
					break;
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