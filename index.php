<?php
//TODO start session

//TODO include database.php file
?>
<?php
//TODO assign database connexion into $database variable

//TODO include checkUser.php file?>

<?php
//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)?>

<?php

//create one php file for each action to manage on the website

//TODO use
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php)
// to insert or update data into database

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php?>

<?php

//TODO add header display

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)?>

<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)?>
<?php 

//session_start();
//include("database.php");
//$database = databaseConnection();
//include("checkUser.php");

$database_link = new PDO('mysql:host=localhost;dbname=questionbank', 'root', '');

$page = $database_link->query("SELECT * FROM `links` ");
echo $page;
$filename = 'template/home.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
     
    if(file_exists('template/'.$page.'.php')){
      $filename = 'template/'.$page.'.php';
    }
}
?>


<?php include("main.php"); ?>
<?php include("template/header.php"); ?>
<p>Projet Web</p>
<?php include('template/footer.php'); ?>
<?php
//TODO use
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php)
// to get data from database (if needed)

// add view display possibly using data from database

// TODO insert the end html envelope (</body></html>)?>