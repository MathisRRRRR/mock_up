<?php

    if (isset($_POST['connect']))
    {
        if (!empty($_POST['cusername']) && !empty($_POST['cpassword'] ))
        {
            $connection = $database->prepare("SELECT * FROM user WHERE username = :usernam");
            $connection->execute(['usernam' => $_POST['cusername']]);
            $cresult = $connection->fetch();

            if ($cresult==true)
            {
                if (password_verify($_POST['cpassword'] , $cresult['password']))
                {
                    $_SESSION['pass']=$cresult['username'];
                    echo 'vous etes connectes';
                    header ("Location: ../mock_up/index.php?home");
                    
                    
                }
                else
                {
                    echo 'le mot de passe n est pas correct';
                }
            }
            else 
            {
                echo 'ce utilisateur n existe pas';
            }
        }
        else
        {
            echo 'veuillez resssayer';
        }
    }

?>