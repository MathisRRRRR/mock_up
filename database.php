<?php

function databaseConnection(){
	return new PDO('mysql:host=localhost;dbname=questionbank','root','');
}

?>

<?php
	/*
    $bdd = new PDO('mysql:host=localhost;dbname=questionbank','root','');
    if (!empty($_GET['user']) || !empty($_GET['pass'])){
        $username = $_GET['user'];
        $password = $_GET['pass'];
        $result = $bdd->query("select * from users where username='$username' and password= '$password' ");
        $row = $result->fetch();
        if ($row['username'] == $username && $row['password'] == $password){
            setcookie('pass',$_GET['pass']);
        }
    }
    if(!empty($_COOKIE['pass'])) {
        $pass = $_COOKIE['pass'];
        $result= $bdd->query("select * from users where password= '$pass' ");
        $user= $result->fetch();
    }

    if(!empty($_GET['unconnect'])){
        unset($_COOKIE['pass']);
	}
	*/
?>

