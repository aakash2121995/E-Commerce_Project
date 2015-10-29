<!-- Register Modal begins -->
<!-- Include pwstrength.js to measure password strength -->
<body>
	<link href="Content/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript" src="assets/js/pwstrength.js"></script>
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<!-- The content within the modal -->
		<div class="modal-content">
			<!-- Modal header containing the logo and some pleasantries -->
			<div class="modal-header" align="center">
				<img src="Img/logo.png" />
				<button type="button" class="close" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span>
				</button>
			</div>
			<!-- Register forms div begins -->
			<div id="div-register-form">
				<!-- Register form begins (we keep it simple but with a cool error effect) -->
				<!--<form id="register-form" action="include/_register.php" method="POST">-->
				<form id="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<!-- The form appears within a modal -->
					<div id="pwd-container" class="modal-body">
						<!-- Name -->
						<input id="register_fname" name="register_fname" class="form-control" type="text" placeholder="First Name" required="true" value="<?php echo $fname;?>"></input>
						<p class="bg-danger" value="<?php echo $fnameErr;?>"></p>
						<br />
						<input id="register_lname" name="register_lname" class="form-control" type="text" placeholder="Last Name" required="false" value="<?php echo $lname;?>"></input>
						<p class="bg-danger" value="<?php echo $lnameErr;?>"></p>
						<br />
						<!-- Email address -->
						<input id="register_email" name="register_email" class="form-control" type="text" placeholder="Email Address" required="true" value="<?php echo $email;?>"></input>
						<p class="bg-danger" value="<?php echo $emailErr;?>"></p>
						<!--<br />-->
						<!-- Gender -->
						<h4>Gender</h4>
						<input type="radio" name="gender" <?php if (isset($gender) && $gender === "female") echo "checked";?>  value="female"> Female</input><br />
						<input type="radio" name="gender" <?php if (isset($gender) && $gender === "male") echo "checked";?>  value="male"> Male</input><br />
						<input type="radio" name="gender" <?php if (isset($gender) && $gender === "other") echo "checked";?>  value="other"> I Don't Want To Answer</input>
						<br />
						<br />
						<!-- Password -->
						<input id="register_password" name="register_password" type="password" class="form-control" placeholder="Password"></input>
						<div class="pwstrength_viewport_progress"></div>
						<div id="pwerror">
						</div>
						<p class="bg-danger" value="<?php echo $passwordErr;?>"></p>
						<br />
						<!-- Confirm password -->
						<input id="register_password_confirm" name="register_password_confirm" type="password" class="form-control" placeholder="Confirm your password" onChange="checkPasswordMatch();"></input>
						<p id="divCheckPasswordMatch" align="center">
						</p>
						<br />

						<!-- JQuery to fire up the checkPasswordMatch -->
						<script type="text/javascript">
							jQuery(document).ready(function () {
								$("#register_password_confirm").keyup(checkPasswordMatch);
							});
						</script>

						<!-- JavaScript to dynamically match password and confirm password fields -->
						<script type="text/javascript">
							function checkPasswordMatch() {
								var password = $("#register_password").val();
								var confirmPassword = $("#register_password_confirm").val();
							
								if (password != confirmPassword) {
									$("#divCheckPasswordMatch").html("Passwords do not match!");
									$("#divCheckPasswordMatch").removeClass("bg-success");
									$("#divCheckPasswordMatch").addClass("bg-danger");
								}
								else {
									$("#divCheckPasswordMatch").html("Passwords match.");
									$("#divCheckPasswordMatch").removeClass("bg-danger");
									$("#divCheckPasswordMatch").addClass("bg-success");
								}
							}
						</script>

						<!-- JQuery to call the pwstrength JS -->
						<script type="text/javascript">
							jQuery(document).ready(function () {
								"use strict";
								var options = {};
								options.common = {
									minChar: 6,
									usernameField: "#register_fname",
									onLoad: function () {
										$('#pwerror').addClass("bg-danger");
									}
								}
								options.rules = {
									scores: {
										wordNotEmail: -100,
										wordLength: -50,
										wordSimilarToUsername: -100,
										wordSequences: -50,
										wordTwoCharacterClasses: 2,
										wordRepetitions: -25,
										wordLowercase: 1,
										wordUppercase: 3,
										wordOneNumber: 3,
										wordThreeNumbers: 5,
										wordOneSpecialChar: 3,
										wordTwoSpecialChar: 5,
										wordUpperLowerCombo: 2,
										wordLetterNumberCombo: 2,
										wordLetterNumberCharCombo: 2
									},
									activated: {
										wordNotEmail: true,
										wordLength: true,
										wordSimilarToUsername: true,
										wordSequences: true,
										wordTwoCharacterClasses: false,
										wordRepetitions: true,
										wordLowercase: true,
										wordUppercase: true,
										wordOneNumber: true,
										wordThreeNumbers: true,
										wordOneSpecialChar: true,
										wordTwoSpecialChar: true,
										wordUpperLowerCombo: true,
										wordLetterNumberCombo: true,
										wordLetterNumberCharCombo: true
									}
								}
								options.ui = {
									container: "#pwd-container",
									showVerdictsInsideProgressBar: true,
									showErrors: true,
									viewports: {
										progress: ".pwstrength_viewport_progress",
										errors: "#pwerror"
									},
									errorMessages: {
										wordLength: "Your password is too short",
										wordNotEmail: "You should not use your email address in the password",
										wordSimilarToUsername: "Your password should not contain your username",
										// wordTwoCharacterClasses: "Use different character classes",
										wordRepetitions: "Your password has too many consecutively repeating characters (eg. aaa, 111 etc.)",
										wordSequences: "Your password contains sequences of alphabets of numbers (eg. 123, abc, qwerty, 9876 etc.)"
									}
								};
								$('#register_password').pwstrength(options);
							});
						</script>
					</div>
					<div class="modal-footer">
						<div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
						</div>
					</div><!-- The footer ends -->
				</form><!-- The Register form ends -->
			</div><!-- Register form div ends -->
		</div>
	</div>
</div>
</body>

<!-- Inline styles for making the meter and password box appear unified -->
<style>
	.progress {
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
	
	#register_password {
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
</style>

<?php
	// require '../config/_connect.php';
	// require '../config/_session.php';
	// define variables and set to empty values
	$fname = $lname = $email = $gender = $password = $password_confirm = "";
	$fnameErr = $lnameErr = $emailErr = $passwordErr = "";
	// Perform input sanitation when the form is submitted
	// After sanitation, resubmit the input back to _register.php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// If the submitted passwords don't match, don't proceed
		if (!($_POST["register_password"] === $_POST["register_password_confirm"]))
			$passwordErr = "The password and confirm password fields did not match.";
		else {
			if (!empty($_POST["register_fname"])) {
				$fname = test_input($_POST["register_fname"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/", $fname))
					$fnameErr = "Only letters and white spaces are allowed in your name.";
			}
	
			if (!empty($_POST["register_lname"])) {
				$lname = test_input($_POST["register_lname"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/", $lname))
					$lnameErr = "Only letters and white spaces are allowed in your name.";
			}
			
			if (!empty($_POST["register_email"])) {
				$email = test_input($_POST["register_email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
					$emailErr = "It seems like you entered an invalid email address. Please check your inputs."; 
			}
	
			if (empty($_POST["register_password"]))
				$passwordErr = "You are not allowed to have empty passwords!";
			elseif (strlen($_POST["register_password"]) < 6)
				$passwordErr = "Your password should be atleast 6 characters.";
			else
				$password = test_input($_POST["register_password"]);
		}
	}
	
	function test_input($data) {
		// Trim non-printing characters
		$data = trim($data);
		// Remove quotes
		$data = stripslashes($data);
		// Translate special chars
		$data = htmlspecialchars($data);
		return $data;
	}
?>