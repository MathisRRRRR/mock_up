<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz index</title>
    <link rel="stylesheet" href="../static/css/base.css">
    <link rel="stylesheet" href="../static/css/account.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
</head>
<body class="quiz1">
    <?php include("header.php"); ?>

	<p>
    Your Results!
   </p>

 <?php
 $result=0;
  if (isset($_POST['submit'])){
   $selectOption = $_POST['options_1'];
   if($selectOption=="thor"){
      $result++;
   }
   $selectOption = $_POST['question2'];
   if($selectOption=="empire"){
      $result++;
   }
   $selectOption = $_POST['joaquin'];
   if($selectOption=="2004"){
      $result++;
   }
   
   if(isset($_POST['gimli']) && isset($_POST['frodo'])&& isset($_POST['Merry']) && !isset($_POST['saruman'])&& !isset($_POST['thorin'])){
      $result++;
   }
   echo($result);
}
   ?>
   



<?php include('footer.php'); ?>
</body>
</html>