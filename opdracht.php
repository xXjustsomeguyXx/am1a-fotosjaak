<?php
	$userrole = array('customer', 'root', 'admin' );
	include ("security.php");
	
	if (isset($_POST['submit']))
	{
		//var_dump($_POST);
		echo "Uw geplaatste opdracht is correct ontvangen. U krijgt een <br>
			  bevestigingsemail toegestuurd. U wordt door gestuurd naar <br>
			  homepage.";
		header("refresh:6;index.php?content=customer_homepage");
	}
	else 
	{
?>

<p>Plaats een opdracht</p>

<form action='index.php?content=opdracht' method='post' >
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
			<td>
				<input type= 'date' name='deliverydate' placeholder ='dd-mm-yyyy' />
			</td>
		</tr>
		<tr>
			<td>
				Geef de eventdatum
			</td>
			<td>
				<input type= 'date' name='eventdate' placeholder ='dd-mm-yyyy' />
			</td>
		</tr>
		<tr>
			<td>
				Zwart/wit of kleur
			</td>
			<td>
				<pre>
				Kleur <input type='radio'
				             name='color' 
				             value='color' 
				             checked='checked' /><br>	
				Zwart/Wit <input type='radio' 
								 name='color' 
								 value='black-white' />
				</pre>
			</td>
		</tr>
		
		<tr>
			<td>
				Aantal foto's
			</td>
			<td>
				<input type='number' name='number_of_pictures' min='100'/>
			</td>
		</tr>
		
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
				<input type='submit' value='verstuur' />
			</td>
		</tr>
	</table>
</form>
<?php
}
?>