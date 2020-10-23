<!Doctype html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./static/css/base.css">
    <link rel="stylesheet" href="./static/css/account.css">
</head>

<body>
    <?php include("header.php"); ?>

    
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

        
        
      </form>
    <?phpinclude('footer.php'); ?>
</body>

</html>






