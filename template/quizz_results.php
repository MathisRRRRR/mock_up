<!Doctype html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quizz index</title>


   <?php include("header.php"); ?>

   <p>
      Your Results!
   </p>

   <?php

   if (isset($_POST['submit'])) {
      //$answers = 1;
      //var_dump($_POST);




      $request = "INSERT INTO user_answer(`Answer_id`,`User_id`) VALUES ( 1,2)";
      $response = $database->exec($request);

      var_dump($response);

     
   }


   ?>

   <?php include('footer.php'); ?>
   </body>

   </html>