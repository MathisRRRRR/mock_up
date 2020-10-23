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
   //$answers = 1;
   // var_dump($_POST[$answers]);
   


  
   
   
      $insert = $database->exec(" INSERT INTO `user_answer`(`user_id`,`answer_id`) VALUES (1, 5) ");


      if($insert){
         echo("inserted");
      }
   
}


?>

   <?php include('footer.php'); ?>
   </body>

</html>