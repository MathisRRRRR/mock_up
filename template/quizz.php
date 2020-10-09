<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz index</title>
    <link rel="stylesheet" href="../static/css/base.css">
    <link rel="stylesheet" href="../static/css/account.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet"> -->
</head>
<body >
    <?php include("header.php"); ?>

    
<section class="questioncontent">


<form action="quizz_results.php" method="post">

    <h3> - Q1 : </h3>

<label for="q1-select"> Who is this Man? </label>

<br><br>

<img src="../static/img/trump.jpg"  align="left" width="300" height="200">

<br><br><br><br><br><br><br><br><br><br><br><br>

<select name="options_1" id="q1-select">
    <option value=""> --Please choose an option-- </option>
    <option value="trump"> Donald Trump </option>
    <option value="gates"> Bill Gates </option>
    <option value="harry"> Harry Porter </option>
</select>

<br><br><br><br>

<h3> - Q2 : </h3>

<p> In which city can we find this statue</p>


<img src="../static/img/liberty.jpg" align="left" width="200" height="300">

<br><br><br><br><br><br><br><br><br><br><br><br>

<div>
  <input type="radio" id="q2choix1" name="question2" value="Chicago">
  <label for="2option1"> Chicago </label>
</div>

<div>
  <input type="radio" id="q2choix2" name="question2" value="New York">
  <label for="q2choix2"> New York</label>
</div>

<div>
  <input type="radio" id="q2choix3" name="question2" value="Washington">
  <label for="q2choix3"> Washington</label>
</div>

<div>
  <input type="radio" id="q2choix4" name="question2" value="Seattle">
  <label for="q2choix4">Seattle</label>
</div>

<br><br>
<h3> - Q3 : </h3>
  <p> What is the capital of the United State of America ? </p>
  <div>
  <input type="text" id="capitalofus" name="question3ans">
 
</div>

  <br><br>


 <h3> - Q4 : </h3>
  <p> when was Obama elected ? </p>

<img src="../static/img/Obama.jpg" align="left" width="200" height="300">

<br><br><br><br><br><br><br><br><br><br><br><br>

<div>
  <input type="checkbox" id="op1" name="op1"
         >
  <label for="op1">2009</label>
</div>

<div>
  <input type="checkbox" id="op2" name="op2">
  <label for="op2">2017</label>
</div>

<div>
  <input type="checkbox" id="op3" name="op3">
  <label for="op3">2008</label>
</div>

<br>
<input type="submit" name="submit">
</form>
<br>




</section>
    <?php include('footer.php'); ?>
</body>
</html>