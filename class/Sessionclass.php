<?php
	class SessionClass
	{
		//Fields
		private $id;
		private $email;
		private $userrole;
		private $logged_in;
		
		/* Consructor van een php-class heeft altijd dezelfde naam:
		 * __construct(). let op de dubbele underscore. onthoud dat
		 * iedere php-method altijd het woord function gebruikt. 
		 */
		public function __construct()
		{
			
		}
		
		/* maak een method die het id, emailadres, userrole en logged_in opslaat
		 * in sessie variabelen.
		 */
		public function login($loginClassObject)
		{
			$this->id =$_SESSION['id'] = $loginClassObject->get_id();
			$this->email =$_SESSION['email'] = $loginClassObject->get_email();
			$this->userrole =$_SESSION['userrole'] = $loginClassObject->get_userrole();
			$this->logged_in = true;
		}	
	
	
	public function logout()
	{
		/* De functie session_destroy vernietigd alle session variabelen, zoals
		 *  $_SESSION['id'], $_SESSION['email'], enz......
		 */
		session_destroy();
		/* Alle fields moeten ook leeg worden gehaalt met de php-functie
		 * unset
		 * 
		 */
		unset($this->id);
	}

	}
	$session = new SessionClass();
?>