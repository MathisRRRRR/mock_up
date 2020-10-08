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
    Coming soon!
   </p>
<!---VARIABLE LINKED--->
 <?php
  function compare($q1){
     $compteur=0;
     if ($q1=='teletubbies') {
        $compteur+=1;
     }
     return $compteur; 
  }
  $test=compare($_GET['var']);
  echo "Points :";
  echo $test; 
   ?>
   </p>
<!---VARIABLE LINKED--->


<?php include('footer.php'); ?>
</body>
</html>