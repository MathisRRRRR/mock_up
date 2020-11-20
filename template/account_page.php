<!Doctype html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./static/css/base.css">
    <!--  -->
</head>

<body>
    <h2><br>Connect to your account</h2>
    
    <form  action="/action_page.php">
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="connect" name="connect" id="connect">Login</button>
          
        
        </div>

      </form>

    <h2><br>Not registered yet ? Create an account</h2>

    <form  action="/action_page.php">
        <div class="container">
          <label for="firstname"><b>Firstname</b></label>
          <input type="text" placeholder="Enter Firstname" name="firstname" required>

          <label for="lastname"><b>Lastname</b></label>
          <input type="text" placeholder="Enter Lastname" name="lastname" required>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <label for="cpsw"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm your Password" name="cpassword" required>

          <button type="submit" name="submit" id="submit">Register</button>

          <?php include("checkUser.php"); ?>
          
        </div>

      </form>

      <h1> <br><br> </h1>

</body>

</html>






