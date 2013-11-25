		<form action="index.php?content=register" method="post">
			<table class='simple'>
					<tr>
						<td>Voornaam:</td>
					</tr>
				<tr>
					<td><input type="text" name="firstname" /></td>
				</tr>
					<tr>
						<td>Tussenvoegsel</td>
					</tr>
				<tr>
					<td><input type="text" name="infix" /></td>
				</tr>
					<tr>
						<td>Achternaam:</td>
					</tr>
				<tr>
					<td><input type="text" name="surname" /></td>
				</tr>
					<tr>
						<td>Straat + huisnummer:</td>
					</tr>
				<tr>
						<td><input type="text" name="street" required />
						<input type="number"  name="housenumber" min="0" max="18923" required /></td>
				</tr>				
					<tr>
						<td>Woonplaats:</td>
					</tr>
				<tr>
						<td><input type="text" name="address" /></td>
				</tr>
				
					<tr>
						<td>Postcode:</td>
					</tr>
				<tr>
						<td><input type="text" name="zipcode" /></td>
				</tr>
				
					<tr>
						<td>Geboortedatum:</td>
					</tr>
				<tr>
						<td><input type="date" name="birthday" /></td>
				</tr>
				
					<tr>
						<td>Geslacht:</td>
					</tr>
				<tr>
						<td><input type="radio" name="sex" value ="Male" required/>Male<br>
						<input type="radio" name="sex" value ="Female" required />Female</td>
				</tr>
				
					<tr>
						<td>Burgelijke staat:</td>
					</tr>
				<tr>
						<td><input type="text" name="civilstats" /></td>
				</tr>
				
					<tr>
						<td>favoriete GameSoort:</td>
					</tr>
				<tr>
						<td>
						<select name="favorite_game_type">
								<option value="Actie">Actie</option>
								<option value="Sports">Sports</option>
								<option value="Avontuur">Avontuur</option>
								<option value="Racing">Racing</option>
						</select>
						</td>
				</tr>
				
					<tr>
						<td>favoriete spel:</td>
					</tr>
				<tr>
						<td><input type="text" name="favorite_game" /></td>
				</tr>
				
					<tr>
						<td>email:</td>
					</tr>
				<tr>
						<td><input type="email" name="email" required /></td>
				</tr>
				
					<tr>
						<td>password:</td>
					</tr>
				<tr>
						<td><input type="password" name="password" required ></td>
				</tr>
			
				
				<tr>
					<td><input type="submit" name="verstuur" /></td>
				</tr>
			</table>
		</form>