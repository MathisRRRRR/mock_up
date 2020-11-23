<?php
//$database = new PDO('mysql:host=localhost;dbname=questionbank', 'root', '');
include ("./template/log.php");
?>
<!--
<link rel="stylesheet" href="../static/css/base.css">
<link rel="stylesheet" href="../static/css/account.css">
-->
</head>

<body> 
  <nav>
    <ul>
      <li><a href="index.php?page=home">Home</a></li>
      <?php
        if (!empty($_SESSION['pass']))
        {
            $response = $database->query("SELECT * FROM `quizz` ");

            while ($result = $response->fetch()) {?>
                <li><a href="index.php?page=quizz&quizz_id=<?php echo $result['quizz_id']?>"><?php echo ($result['quizz_name']); ?></a></li><?php   
            }
            $response->closeCursor() ;
            
        }   ?>
      <?php
        if (!empty($_SESSION['pass']))
        {?>
            <li> <a href="index.php?page=index&ac=1" >Log-out</a></li>
            <?php
        }
        else
        {?>
            <li><a href="index.php?page=account_page">Login</a></li>
        <?php
        }?>
        
       
    </ul>
  </nav>
  </body>