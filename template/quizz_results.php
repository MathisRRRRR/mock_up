<!Doctype html >
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quizz index</title>

 
   <p>
      Your Results!
   </p>

 <?php

if(isset($_POST['submit'])){
   
   $count=0;
   if($_GET['quiz']==1){
    $count =2;
   }
   else if($_GET['quiz']==2){
    $count = 6;
   }
   $marks=0;
   $answers =$_POST;
   for( $i =0;$i<3;$i++){
      $response_answers = $database->query("SELECT `answer_text` FROM `answer` WHERE
   `answer`.`answer_question_id`= $count and `answer`.`Is_valid_answer`=1");
   
   $correct = $response_answers->fetch();

   if($answers[$count]== $correct['answer_text']){
      $marks++;
   }
   
   $response_answers->closeCursor();
   $count++;
   
   }

global $database;
$q = $database->prepare("INSERT INTO user_answer(username,id_quizz,result) VALUES(:lastname,:id_quizz,:marks)");
$q->execute([
	'username' => $_SESSION['pseudo'],
    'id_quizz' => $_GET['quiz'],
    'result' => $marks,
]);
   
echo("Votre score est de" $marks " points. F�licitaions."); 
   
}


?>
   </body>

</html>