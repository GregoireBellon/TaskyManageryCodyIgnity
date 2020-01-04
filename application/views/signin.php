<!DOCTYPE html>
<link href="pageLogin.css" rel="stylesheet" xmlns="http://www.w3.org/1999/html">
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
</head>
<body>
<div ><h1 id="title">Sign up</h1></div>
<div >


	<form id="form_inscription" method="post" action="index.php/users/redirectsignin">

		<span>Username <input class="input" name="signin_username" value="<?php if(isset($_COOKIE['login'])) {echo $_COOKIE['login'];} ?>" required></span>

		<span >Password <input class="input" type="password" name="signing_password" value="<?php echo $_COOKIE['password']; ?>" required></span>
		<span >Confirm password <input class="input" type="password" name="signing_password_confirm" required></span>

		<input  id="sign_button" value="Sign up" name="signing_submit" type="submit">

	</form>

</div>
</body>
</html>
