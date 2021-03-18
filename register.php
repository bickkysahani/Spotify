<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>


<html>
<head>
<link rel="icon" href="includes/images/logo2.jpg" type="image/icon type">
	<link rel="stylesheet" href="assets/css/register.css">
	<title>Welcome to Spotify!</title>
</head>
<body>
    <div id="background">
		<div id="loginContainer">
			<div id="inputContainer">

				<form id="loginForm" action="register.php" method="POST"> <!-- login form starts from here -->
					<h2>Login to your account</h2>
					<p>
						<label for="loginUsername">Email address or username </label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="Email address or username " required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="password" required>
						<?php echo $account->getError(Constants::$loginFailed); ?>

					</p>
					<p><a href="#">Forgot your password?</a></p>
					<p><input type="checkbox" id="rememberme" name="rememberme" value="">
					<label for="rememberme">Remember me</label><br></p>
					<button type="submit" name="loginButton">LOG IN</button>
					
					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>
					</div>
				</form> <!-- login form ends here -->
		
				
				<form id="registerForm" action="register.php" method="POST"> <!--register form starts from here -->
					<h2>Create your free account</h2>
					<p>
						
						<label for="email">What's your email?</label>
						<input id="email" name="email" type="text" placeholder="Enter your email." value="<?php getInputValue('email') ?>" required>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
					</p>
					<p>
						<label for="email2">Confirm your email.</label>
						<input id="email2" name="email2" type="text" placeholder="Enter your email again." value="<?php getInputValue('email2') ?>" required>
					</p>

					<p>
						
						<label for="password">Create a Password</label>
						<input id="password" name="password" type="password" placeholder="Create a password." required>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
					</p>

					<p>
						
						<label for="userName">What should we call you?</label>
						<input id="userName" name="userName" type="text" placeholder="Enter a profile name." value="<?php getInputValue('userName') ?>" required>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
					<!--This appears on your profile. -->
					</p>
					<!--
					<p>
						<label for="dob">What's your date of birth?</label>
						<input id="dob" name="dob" type="date">
					</p>
					<p>
					What's your gender?
						
						<input id="gender_male" name="gender_male" type="radio">
						<label for="gender_male">Male</label>
						<input id="gender_female" name="gender_female" type="radio">
						<label for="gender_female">Female</label>
						<input id="gender_none" name="gender_none" type="radio">
						<label for="gender_none">None</label>
					</p>
					<p>
					<input type="checkbox" id="rememberme" name="rememberme" value="">
					<label for="rememberme">Please send me news and offers from Spotify</label><br>
					</p>
					<p>
					<input type="checkbox" id="rememberme" name="rememberme" value="">
					<label for="rememberme">Share my registration data with Spotify's content providers for marketing purposes.</label><br>
					</p>
					<p>
					<input type="checkbox" id="rememberme" name="rememberme" value="">
					<label for="rememberme">I agree to the Spotify terms & conditions and Privacy Policy.</label><br>
					</p>

					<p>By clicking on Sign up, you agree to Spotify's <a href="#">Forgot your password?</a></p>
					<p>To learn more about how Spotify collects, uses, shares and protects<br> your personal data please read Spotify's <a href="#">Privacy Policy.</a></p>

					-->
					<button type="submit" name="registerButton">SIGN UP</button>
					
					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Log in here.</span>
					</div>
					
				</form> <!-- register form ends here -->

			</div>
		</div>
	</div>
</body>
</html>