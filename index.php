<?php
   session_start();
    
    
    if (empty($database))
    {
        include("database.php");
        $database=databaseConnection();
        include("template/log.php");

    }
    

  
    
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./static/css/base.css">
        <link rel="stylesheet" href="./static/css/account.css">
    </head>

    <body>
        <header>
            <?php include("template/header.php"); ?>    
        </header>
            <?php
                $page = false;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                if($page && file_exists('template/'.$page.'.php')) {
                    include('template/'.$page.'.php');
                }
                 
                else{
                    include('template/home.php');
                }
                
            ?>
        <footer>
            <?php include('template/footer.php')?>
        </footer>
    </body>
</html>
