<html>
<head>
	<title>Welcome to Spotify!</title>
</head>
<body>
    <h1>To continue, log in to Spotify.</h1>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Email address or username </label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="Email address or username " required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="password" required>
			</p>
            <p><a href="#">Forgot your password?</a></p>
            <p><input type="checkbox" id="rememberme" name="rememberme" value="">
<label for="rememberme">Remember me</label><br></p>
			<button type="submit" name="loginButton">LOG IN</button>
			<p>Don't have an account?</p>
            <button type="submit" name="signupButton">SIGN UP FOR SPOTIFY</button>
		</form>

<h1>Sign up for free to start listening.</h1>
        <form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<label for="email">What's your email?</label>
				<input id="email" name="email" type="text" placeholder="Enter your email." required>
			</p>
            <p>
				<label for="email2">Confirm your email.</label>
				<input id="email2" name="email2" type="text" placeholder="Enter your email again." required>
			</p>

			<p>
				<label for="password">Create a Password</label>
				<input id="password" name="password" type="password" placeholder="Create a password." required>
			</p>

			<p>
				<label for="userName">What should we call you?</label>
				<input id="userName" name="userName" type="text" placeholder="Enter a profile name." required>
			This appears on your profile.
            </p>
            <p>
				<label for="dob">What's your date of birth?</label>
				<input id="dob" name="dob" type="date" placeholder="" required>
			</p>
            <p>
            What's your gender?
				
				<input id="gender_male" name="gender_male" type="radio" placeholder="" required>
                <label for="gender_male">Male</label>
                <input id="gender_female" name="gender_female" type="radio" placeholder="" required>
                <label for="gender_female">Female</label>
                <input id="gender_none" name="gender_none" type="radio" placeholder="" required>
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


			<button type="submit" name="loginButton">SIGN UP</button>

            <p>Have an account ? <a href="#">Log in.</a></p>
			
		</form>
	</div>

</body>
</html>