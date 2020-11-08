<?php
//TODO start session
session_start();

//TODO include database.php file
include("database.php");

//TODO assign database connexion into $database variable
$database = databaseConnection();

//TODO include checkUser.php file
include("checkUser.php");

//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable
//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
$page='';
$filename ='template/account_page.php';
if(isset($_GET['page'])){
    $page = $_GET['page'];

    if(file_exists('template/'.$page.'.php')){
        $filename = 'template/'.$page.'.php';
    }
}




//create one php file for each action to manage on the website

//TODO use
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php)
// to insert or update data into database

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php



//TODO add header display
?>

<!Doctype html >

<?php
include("main.php");
?>

<body>
<?php
if(!isset($_GET['page']) && $page !==''){
    
    include("template/header.php");     
    

    include('template/footer.php');
}
include($filename); 
?>
</body>

</html>


<?php

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php)
// to get data from database (if needed)

// add view display possibly using data from database

// TODO insert the end html envelope (</body></html>)