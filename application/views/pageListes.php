<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Listys</title>
</head>
<body>
<h1> Voici vos <h1 style="font-weight: bolder; color: #5a0099; font-size: 50px">TASKYS</h1></h1>
<?php
	echo "<br>";
	if (isset($liste_0)){
		$i = 0;
		$nom = 'liste_'.$i;
		while (isset($$nom)){
			echo "<button>".$$nom."</button>"; // Penser à ajouter la redirection vers les tâches quand on appuie sur une liste
			echo "<br><br>";
			$i++;
			$nom = 'liste_'.$i;

		}
	}else {
		echo $msg_err;
	}

?>
<br>
<form id="form_new_list" method="post" action="/CodyIgnity/index.php/listes/ajouter_liste">
	<input type="submit" value="Ajouter une liste">
</form>

</body>
</html>
