<?php
	class Account {

		private $errorArray;

		public function __construct() {
			$this->errorArray = array();
		}

		public function register($em, $em2, $pw, $un) {
			
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw);
			$this->validateUsername($un);

			if(empty($this->errorArray) == true) {
				//Insert into db
				return true;
			}
			else {
				return false;
			}

		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}
		}
		
		private function validatePasswords($pw) {
			
				if(preg_match('/[^A-Za-z0-9]/', $pw)) {
					array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
					return;
				}
	
				if(strlen($pw) > 30 || strlen($pw) < 5) {
					array_push($this->errorArray, Constants::$passwordCharacters);
					return;
				}
	
			}
	
		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}
		}
			//TODO: check if username exists	

			//TODO: Check that username hasn't already been used

	

	}
?>