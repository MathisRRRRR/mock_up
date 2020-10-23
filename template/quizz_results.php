<!Doctype html >
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quizz index</title>


   <?php include("header.php"); ?>

   <p>
      Your Results!
   </p>

 <?php

if(isset($_POST['submit'])){
   
   $marks=0;
   $answers =$_POST;
   for( $i =2;$i<5;$i++){
      $response_answers = $database->query("SELECT `answer_text` FROM `answer` WHERE
   `answer`.`answer_question_id`= $i and `answer`.`Is_valid_answer`=1");
   
   $correct = $response_answers->fetch();
   if($answers[$i]== $correct['answer_text']){
      $marks++;
   }
   
   $response_answers->closeCursor();
 
   
   }
   
echo($marks); 
   
}


?>

   <?php include('footer.php'); ?>
   </body>

</html>