

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
   $result = 0;
   if (isset($_POST['submit'])) {
      $selectOption = $_POST['options_1'];
      if ($selectOption == "trump") {
         $result++;
      }
      $selectOption = $_POST['question2'];
      if ($selectOption == "New York") {
         $result++;
      }
      $selectOption = $_POST['question3ans'];
      if ($selectOption == "Washington") {
         $result++;
      }
      /**/
      if (isset($_POST['op3']) && !isset($_POST['op1']) && !isset($_POST['op2'])) {
         $result++;
      }
      echo ($result);
   }
   ?>




   <?php include('footer.php'); ?>
   </body>

</html>