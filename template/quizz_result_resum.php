<!Doctype html >
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ranking</title>


   <p>
      Ranking for quizz n°1:
   </p>

 <?php
$rang = 1;

global $database;

$classement = $database->query("SELECT username, result FROM user_answer WHERE id_quizz = 1 AND ORDER BY result DESC ")or die(print_r($database->errorInfo()));
while ($data = mysql_fetch_array($classement)) {
	echo 'rang : ' $rang;  
	echo 'Pseudo : ' $data['username'];
	echo 'Score : ' $data['result'] <br>;
	$rang ++;
}
$classement->closeCursor();
 
?>

   <p>
      Ranking for quizz n°2:
   </p>

 <?php
$rang = 1;

$classement2 = $database->query("SELECT username, result FROM user_answer WHERE id_quizz = 2 AND ORDER BY result DESC ")or die(print_r($database->errorInfo()));
while ($data2 = mysql_fetch_array($classement2)) {
	echo 'rang : ' $rang;  
	echo 'Pseudo : ' $data2['username'];
	echo 'Score : ' $data2['result'] <br>;
	$rang ++;
}
$classement->closeCursor();
 
?>

   </body>

</html>