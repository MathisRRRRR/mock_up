<?php
if(isset($_POST['submit'])){

    extract($_POST);

    if(!empty($password) && !empty($cpassword) && !empty($username)){

        if($password == $cpassword){

            $options = ['cost' => 12];
            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

            $log = $database -> prepare("INSERT INTO user(username, password) VALUES(:username, :password)");
            $log -> execute(['username'=>$username, 'password'=>$hashpass]);

        }
    }
}
?>