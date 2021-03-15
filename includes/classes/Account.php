<?php
	class Account {
		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}
		
		public function login($un,$pw){
			$pw = md5($pw);

			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");

			if(mysqli_num_rows($query) == 1) {
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}


		}
		public function register($em, $em2, $pw, $un) {
			
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw);
			$this->validateUsername($un);

			if(empty($this->errorArray) == true) {
				//Insert into db
				return $this->insertUserDetails($em, $em2, $pw, $un);
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
			//insert into DB function
		private function insertUserDetails($em, $em2, $pw, $un){
			$encryptedPw = md5($pw);
			$profilePic = "assets/images/profile-pics/head_emerald.png";
			$date = date("Y-m-d");
			//echo "INSERT INTO users VALUES ('$em','$encryptedPw','$un','$date','$profilePic')";
			$result = mysqli_query($this->con, "INSERT INTO users VALUES (null,'$em','$encryptedPw','$un','$date','$profilePic')");

			return $result;
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
			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
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
			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
			if(mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}

		}
				



	

	}
?>