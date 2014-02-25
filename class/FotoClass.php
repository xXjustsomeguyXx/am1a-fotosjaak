<?php
	class FotoClass
	{
		//fields
		private $photo_id;
		private $order_id;
		private $photo_name;
		private $photo_text;
		
		//properties
		
		//Constructor
		
		public function __construct()
		{
			// gebruiken we nu even niet...
		}
		// Methods
		public static function insert_into_photo()
		{
			// maak het $database object uit de MySqlDatabaseClass.php
			// bestand beschikbaar biinnen de insert_into_photo() method
			global $database;
			

			// Maak de insert query
			$query = "INSERT INTO `photo` (`photo_id`
										   `order_id`
										   `photo_name`
										   `photo_text`)";
		}
	}
?>