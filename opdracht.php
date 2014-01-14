<?php
	$userrole = array('customer', 'root', 'admin' );
	include ("security.php")
?>
<p>Plaats een opdracht</p>

<form action='' method='post' >
	<table>
		<tr>
			<td>
				Korte Omschrijving
			</td>
			<td>
				<textarea cols = "60" 
						  rows= "5"
						  name='order_short'
						  placeholder='Geef een korte omschrijving'></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Uitgebreide Omschrijving
			</td>
			<td>
				<textarea cols ="60"
						  rows="5" 
						  name='order_long'
						  placeholder='Geef een uitgebreide omschrijving'></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Geef de opleveringsdatum
			</td>
		</tr>
		
		<input type= 'date' name='deliverydate' placeholder ='dd-mm-yyyy' />
	</table>
</form>
