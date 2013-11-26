<?php
	include_once 'config/config.php';
	
	class MySqlDatabaseClass
	{
		//fields
		private $db_connection;
		
		/*	Dit is de constructor van de MySqlDatabaseClass
		 *	Een constructor herken je in PHP aan de naam. De naam is altijd
		 *	__constructor
		 */
		public function __construct()
		{
			//Velden roep je aan met $this->naam_van_veld_zonder_$
			//Er wordt hier een verbinding ggemaakt met de mysql-server
			$this->db_connection = mysql_connect(SERVERNAME,
												 USERNAME,
												 PASWORD)	
			//Er wordt hier een database geselecteerd
			mysql_select_db(DATABASE, $this->db_connection) or die('MySqlDatabaseClass, database niet geselecteerd');
		}
		
		
	}

?>