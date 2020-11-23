<?php /* if (!empty($_SESSION['pass']) && !empty($_GET['ac']) )
{
    session_destroy(); 
    ?>
    <br><br>Vous devez vous connecter pour participer aux quizz ! <?php
}
?>
<?php if (!empty($_GET['ac']) )
{
    session_destroy(); 
    ?>
    <br><br>Vous devez vous connecter pour participer aux quizz ! <?php
}
?>
<?php if ( (empty($_SESSION['pass'])) or (empty($_GET['ac']) && empty($_SESSION['pass'])  ))
{ 
    ?>
    <br><br>Vous devez vous connecter pour participer aux quizz ! <?php
}
?>
<?php if ( !empty($_SESSION['pass']) )
{
    if ( !empty($_GET['ac']))
    {?>
        <br><br>Vous devez vous connecter pour participer aux quizz 123! <?php
    }
    else
    {
        ?>
        <br>Bonjour, bienvenue sur notre site.
        <br>Choisissez un quizz et testez vos connaissances.
        <?php
    }
}
?>*/
?>
<?php
if (true==true)
{
if ( !empty($_SESSION['pass']) )

{
    if (empty($_GET['ac']))
    {
        ?>
        <br>Bonjour, bienvenue sur notre site.
        <br>Choisissez un quizz et testez vos connaissances. <?php
    }
}
else
{?>
    <br><br>Vous devez vous connecter pour participer aux quizz 123! <?php

}
if (!empty($_GET['ac']) && !empty($_SESSION['pass']) )
{?>
    <?php session_destroy(); ?>
    <br><br>Vous devez vous connecter pour participer aux quizz ! <?php
}
}
?>






