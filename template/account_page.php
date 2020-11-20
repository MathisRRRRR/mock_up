<!Doctype html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./static/css/base.css">
    <!--  -->
</head>

<body>
    <h2>Connect to your account</h2>
    
    <form  action="/action_page.php">
        <div class="container">
          <label for="lastname"><b>Lastname</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
        
        </div>

      </form>

    <h2>Not registered yet ? Create an account</h2>

    <form  action="/action_page.php">
        <div class="container">
          <label for="firstname"><b>Firstname</b></label>
          <input type="text" placeholder="Enter Firstname" name="fame" required>

          <label for="lastname"><b>Lastname</b></label>
          <input type="text" placeholder="Enter Lastname" name="lname" required>

          <label for="age"><b>Age</b></label>
          <input type="text" placeholder="Enter Age" name="age" required>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
        
        </div>

      </form>

      <h1> <br> </h1>

</body>

</html>






