<!Doctype html >
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ranking</title>


   <p>
      Mes résultats:
   </p>

 <?php
	if(isset($_SESSION['connexion']) AND $_SESSION['connexion'] === TRUE)
	{
		$classement = $database->query("SELECT username, result, answer_date FROM user_answer WHERE id_quizz = 1")or die(print_r($database->errorInfo()));
		echo "Résultats pour le quizz n°1:";
		while ($data = mysql_fetch_array($classement)) 
		{ 
			echo 'Pseudo : ' $data['username'];
			echo 'Score : ' $data['result'] ;
			echo 'date : ' $data['answer_date'];
			<a 
				href="supprimer.php?id=<?= $data['user_answer_id'] ?>"> Supprimer</a>
			<br>;
		}
		<br>
		echo "Résultats pour le quizz n°2:";
		$classement2 = $database->query("SELECT username, result, answer_date FROM user_answer WHERE id_quizz = 2")or die(print_r($database->errorInfo()));
		while ($data2 = mysql_fetch_array($classement2)) 
		{ 
			echo 'Pseudo : ' $data2['username'];
			echo 'Score : ' $data2['result'] ;
			echo 'date : ' $data2['answer_date'] ;
			<a 
				href="supprimer.php?id=<?= $data2['user_answer_id'] ?>"> Supprimer</a>
			<br>;
		}
		<br>
	}
	else{ echo "Veuillez vous connecter pour voir vos résultats.";}



?>
   </body>

</html>