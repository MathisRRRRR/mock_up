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


<form action="quiz2_results.php" method="post">

<h3> - Q1 : </h3>

<label for="q1-select"> Which Avenger is this? </label>

<br><br>

<img src="../static/img/thor.jpg"  align="left" width="300" height="200">

<br><br><br><br><br><br><br><br><br><br><br><br>

<select name="options_1" id="q1-select">
    <option value=""> --Please choose an option-- </option>
    <option value="ironman"> Iron Man </option>
    <option value="hulk"> The Hulk </option>
    <option value="thor"> Thor </option>
</select>

<br><br><br><br>

<label>What is name of the fifth Starwars movie? </label>

<br><br>
<div>
  <input type="radio" id="q2choix1" name="question2" value="hope">
  <label for="2option1"> A new Hope </label>
</div>

<div>
  <input type="radio" id="q2choix2" name="question2" value="jedi">
  <label for="q2choix2"> The Return of the Jedi</label>
</div>

<div>
  <input type="radio" id="q2choix3" name="question2" value="awaken">
  <label for="q2choix3"> The force awaken </label>
</div>

<div>
  <input type="radio" id="q2choix4" name="question2" value="empire">
  <label for="q2choix4"> The Empire strikes back</label>
</div>
<br><br><br><br>

<label> Which characters are members of the fellowship of the Ring </label>

<br><br>
<br>

<div>
  <input type="checkbox" id="op1" name="gimli"
         >
  <label for="op1">Gimli</label>
</div>

<div>
  <input type="checkbox" id="op2" name="saruman">
  <label for="op2">Saruman</label>
</div>

<div>
  <input type="checkbox" id="op3" name="frodo">
  <label for="op3">Frodo</label>
</div>

<div>
  <input type="checkbox" id="op3" name="Merry">
  <label for="op3">Merry</label>
</div>

<div>
  <input type="checkbox" id="op3" name="thorin">
  <label for="op3">Thorin</label>
</div>

<br><br><br>


<label>In which year was Thor ragnorok released?</label>
<input type ="text" name="joaquin" id="joaquin">

<input type="submit" name="submit">
</form>
<br>




</section>
    <?php include('footer.php'); ?>
</body>
</html>