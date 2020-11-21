<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

</head>

<body>
    <h2><br>Connect to your account</h2>
    <form  method="post">
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="cusername" required>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="cpassword" required>
          <button type="connect" name="connect" id="connect">Login</button>
        </div>
    </form>
    <h2><br>Not registered yet ? Create an account</h2>
    <form method="post">
    <div class="container">
      <input type="text" name="lastname" id="lastname" placeholder="Nom" required><br/>
      <input type="text" name="firstname" id="firstname" placeholder="Prénom" required><br/>
      <input type="text" name="username" id="username" placeholder="username" required><br/>
      <input type="text" name="email" id="email" placeholder="Email" required><br/>
      <input type="password" name="password" id="password" placeholder="Mot de passe" required><br/>
      <input type="password" name="checkpassword" id="checkpassword" placeholder="Confirmer mot de passe" required><br/>
      <button type="submit" name="formsend" id="formsend" required>Submit</button><br/>
    </div>
    </form>

    <?php 

      if(isset($_POST['formsend'])){

        extract($_POST);

        if(!empty($lastname) && !empty($firstname) && !empty($username) && !empty($email) && !empty($password) && !empty($checkpassword)){

          if($password == $checkpassword){

            $options = [
              'costs' => 12,
            ];

            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

            global $database;
            $c = $database->prepare("SELECT email FROM user WHERE email = :email");
            $c->execute(['email'=>$email]);
            $result = $c->rowCount();
            $c = $database->prepare("SELECT username FROM user WHERE username = :username");
            $c->execute(['username'=>$username]);
            $result1 = $c->rowCount();

            if($result ==0 && $result1 ==0){
              $q = $database->prepare("INSERT INTO user(lastname,firstname,username,email,password) VALUES(:lastname,:firstname,:username,:email,:password)");
              $q->execute([
                'lastname' => $lastname,
                'firstname' => $firstname,
                'username' => $username,
                'email' => $email,
                'password' => $hashpass
              ]);
              echo "Le compte a été créé";
              ?><br/><?php
            }

            else{ echo "L'email et/ou le pseudo est déjà utilisé."; }
            ?><br/><?php

          }
          else { echo "Les deux mots de passe ne correspondent pas."; }
          ?><br/><?php
        }

        else{ echo "Les champs ne sont pas tous remplis."; }
        ?><br/><?php
      }

    ?>

</body>

</html>

