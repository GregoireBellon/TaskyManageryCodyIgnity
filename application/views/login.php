<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<link href="pageLogin.css" rel="stylesheet" xmlns="http://www.w3.org/1999/html">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connection page</title>
</head>
<body>

<div > <h1 >TaskManager</h1> </div>
<form method="post" action="users/redirectLoginPage">
	<div>
		<input id="login" name="login"  placeholder="Username"/>
	</div>
	<div >
		<input id="password" name="password"  type="password"  placeholder="password"/>
	</div>
	<div>
		<input name="connecbutton" value="Connection" type="submit"> <br>
		<input name="sign_button" value="Sign In"  type="submit"> <br>



	</div>
</form>
</body>
</html>
