<?php
	require_once("MySqlDatabaseClass.php");
	
	//hieronder de classdefinitie van de LoginClass
	class LoginClass
	{
		//Fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		//properties
		public function get_id(){ return $this->id; } 
		public function get_email(){ return $this->email ; } 
		public function get_password(){ return $this->password; } 
		public function get_userrole(){ return $this->userrole; } 
		public function get_activated(){ return $this->activated; }
		public function get_activationdate(){ return $this->activationdate; }  
		//Constructor
		public function __constructor()
		{
			
		}
		
		public static function find_by_sql($query)
		{
			// met global maak je het database-object uit de MySqlDatabase-class
			//bruikbaar binnen de find_by_sql method
			global $database;
			
			//vuur de query af op de database
			$result = $database->fire_query($query);
			
			//dit is het array waar alle loginclassobjecten in worden gestopt
			//elk loginclass opbject bevat een gevonden record uit de database
			//vindt de query 3 records dan zitten er 3 LoginClassobjecten in 
			//het array $object_array
			$object_array = array();
			
			while ( $row = mysql_fetch_array($result))
			{
				//Maak iedere while ronde een loginClassobject aan
				$object = new LoginClass();
				//stop per record ieder database veld in het LoginClassobject veld
				$object->id 			= $row['id'];
				$object->email 			= $row['email'];
				$object->password 		= $row['password'];
				$object->userrole		= $row['userrole'];
				$object->activated		= $row['activated'];
				$object->activationdate	= $row['activationdate'];
				//stop het net gemaakte loginclassobject in het $object_array
				$object_array[] = $object;
				
			}
			return $object_array;
		}
	//deze method selecteert alle records uit de login table. we maken gebrukt
	// van de find_by_sql($query) method uit deze class.
	
		public static function select_all_from_login()
		{
			$query = "SELECT * FROM `login`";
			$result = self::find_by_sql($query);
			return $result;
		}
		public static function email_exists($emailadress)
		{
			global $database;
			$query = "SELECT * FROM `login`
								WHERE `email` = '".$emailaddress."'";
			$result = $database->fire_query($query);
			if (mysql_num_rows(result) > 0)
			{
				return "het e-mailadres bestaat al in de database";
			}
			else {
			{
				return "het e-mailadres bestaat niet";		
			}
		}
	}
}

?>