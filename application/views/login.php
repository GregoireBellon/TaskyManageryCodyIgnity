<?php
session_start();
?>
<!DOCTYPE html>
<link href="pageLogin.css" rel="stylesheet" xmlns="http://www.w3.org/1999/html">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connection page</title>
</head>
<body>

<div id="brand"> <h1 id="title">TaskManager</h1> </div>
<img src="../Ressources/user.png" id="connection_img">

<form id="form_connection" method="post" action="<?php echo base_url()?>users/connection">
		<div id="username_input" >
			<input name="username" class="input" placeholder="Username"/>
		</div>
		<div id="password_input" >
			<input name="password" class="input" type="password"  placeholder="password"/>
		</div>
		<div id="submit_buttons">
			<input name="connecbutton" value="Connection" class="submit" id="connec_button" type="submit" > <br>
			<input name="sign_button" value="Sign In" class="submit" id="sign_button" type="submit"> <br>

		<!--	<?php echo $_SESSION['connection_error']?>-->

		</div>
	</form>
</body>
</html>
