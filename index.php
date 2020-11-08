<?php

$database_link = new PDO('mysql:host=localhost;dbname=questionbank', 'root', '');

$page = $database_link->query("SELECT * FROM `links` ");

?>


<?php foreach($page as $pg); ?>

<?php include($pg["main"]); ?>
<?php include($pg["header"]); ?>
<p>Projet Web</p>
<?php include($pg["footer"]); ?>
