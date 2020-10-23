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
   $answers = 1;
   $answer_id = $_POST[$answers];

  
   
   
      $insert = $database->query(" INSERT INTO `user_answer`(`user_id`,`answer_id`) VALUES ($answers, $answer_id) ");
      var_dump($insert);
      
      if($insert){
         echo("inserted");
      }
   
}


?>

   <?php include('footer.php'); ?>
   </body>

</html>