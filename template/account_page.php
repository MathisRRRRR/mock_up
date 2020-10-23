<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz index</title>
    <link rel="stylesheet" href="../static/css/base.css">
    
    <!-- <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet"> -->

 

      <!-- Modal Content -->
      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <img src="../static/images/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="lastname"><b>lastname</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        
        <div class="container" style="background-color:#00000059">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <!Doctype html>
</head>

=======
<!Doctype html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./static/css/base.css">
    <link rel="stylesheet" href="./static/css/account.css">
</head>

<body>
    <?php include("template/header.php"); ?>


   
   <?php include('template/footer.php'); ?>
</body>

</html>
>>>>>>> php_v1
