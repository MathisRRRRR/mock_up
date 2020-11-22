<?php
	$database2 = new PDO('mysql:host=localhost;dbname=questionbank','root','');
	$pdoStat = $database2->prepare('DELETE FROM user_answer WHERE user_answer_id=:id1 LIMIT 1');
	$pdoStat->bindValue(':id1', $_GET['id'], PDO::PARAM_INT);
	$pdoStat->execute();
	?>

<!docotype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
	<p> 
		Données supprimées.
	</p>

   </body>

</html>