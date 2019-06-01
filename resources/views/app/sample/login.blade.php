
<!--
    Login template using Material Design Lite (MDL)
    @author Shashank Tiwari
 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Material Design Lite Login From</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mdl-layout mdl-js-layout" style="margin: 40% 0; width: 100% !important;">
	<div id="login-conatiner" class="mdl-card" style="text-align: center; width: 100% !important;">
		<div class="mdl-card__supporting-text">
			<div id="card-heading">
				<h3>Login</h3>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" id="username"/>
				<label class="mdl-textfield__label" for="username">username</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" id="email"/>
				<label class="mdl-textfield__label" for="email">Email</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="password"/>
				<label class="mdl-textfield__label" for="password">Password</label>
			</div>
			<a id="login-button" href="{{ route("sample.my-profile") }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
				Login
			</a>
		</div>

		<div class="mdl-card__actions">
			<button class="mdl-button mdl-js-button mdl-button--primary">Register</button>
			<button id='forgotpassword' class="mdl-button mdl-js-button mdl-button--primary">Forgot Password</button>
		</div>
	</div>
</div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>