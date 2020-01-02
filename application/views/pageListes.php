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
	if (isset($data[1])){
		$i = 0;
		while (isset($data[$i])){
			echo "<button>".$data[$i]."</button>";
			$i++;
		}
	}else {
		echo $msg_err;
	}

?>
<button> Ajouter une liste</button>
</body>
</html>
