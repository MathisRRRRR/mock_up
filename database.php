<?php

function databaseConnection(){
	return new PDO('mysql:host=localhost;dbname=questionbank','root','');
}

?>


