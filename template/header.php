<?php
$database = new PDO('mysql:host=localhost;dbname=questionbank', 'root', '');
?>
<link rel="stylesheet" href="../static/css/base.css">
<link rel="stylesheet" href="../static/css/account.css">
</head>

<body> 
  <nav>

    <ul>
      <li><a class="active" href="/mock_up/template/home.php">Home</a></li>


      <?php

      $response = $database->query("SELECT * FROM `quizz` ");

      while ($result = $response->fetch()) {
      ?>
        <li><a href="/mock_up/template/quizz.php?quizz_id=<?php echo $result['quizz_id']?>"><?php echo ($result['quizz_name']); ?></a></li>

      <?php   }
      $response->closeCursor() ;
      ?>
      <li><a href="/mock_up/template/account_page.php">Login</a></li>
    </ul>
  </nav>