<?php
	//include de loginclass
	require_once('class/LoginClass.php');
	
	//we hebben de method find_by_sql($query) static gemaakt. dit heeft als 
	//dat we deze method kunnen aanroepen zonder een object te hoeven	
	//maken van de class loginclass. we kunnen de method simpel aanroepen door
	//de classnaam gevolgd door een dubbele dubbele punt ::
	//LoginClas::find_by_sql($query)
	
	$result_array = LoginClass::select_all_from_login();
	
	echo "<table>
				<tr>
					<th>id</th>	
					<th>email</th>
					<th>password</th>
					<th>userrol</th>
					<th>activated/th>
					<th>activationdate</th>
				<tr>";
	foreach ($result_array as $value) 
	{
		
		echo "<tr>
				<td>" .$value->get_id()."</td>
				<td>" .$value->get_email()."</td>
				<td>" .$value->get_password()."</td>
				<td>" .$value->get_userrole()."</td>
				<td>" .$value->get_activated()."</td>
				<td>" .$value->get_activationdate()."</td>
			  <tr>";	
	}
	echo "</table>";
?>


<h3>Dit is de logintest pagina</h3>


