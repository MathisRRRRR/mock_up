<?php
if (isset($_GET['quizz_id'])) {
  $quizz_id = $_GET['quizz_id'];
} else {
  include 'home.php';
  die;
}



?>


<!Doctype html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz index</title>

  <?php include("header.php");

  $response_questions = $database->query("SELECT `question_id`, `question_title`,`question_input_type` FROM `question`  JOIN `quizz` ON 
  `question`.`question_quizz_id` = `quizz`.`quizz_id`WHERE `quizz`.`quizz_id`= $quizz_id");
  $question_number = 1;




  foreach ($response_questions as $question) {

    $question_id =$question['question_id'];
   
  ?>

    <form action="quizz_results.php" method="post">

      <section class="questioncontent">

        <h3> - <?php echo ($question_number); ?> : </h3>

        <label><?php echo ($question['question_title']); ?> </label>
       <?php 
       
       $response_answers = $database->query("SELECT `answer_id`,`answer_text`,`is_valid_answer` FROM `answer` WHERE
       `answer`.`answer_question_id`= $question_id");
       
       foreach($response_answers as $answer){?>
       <br>
        <input type="radio" id="<?php$answer['answer_id'];?>" name="<?php$question['question_id'];?>" value="<?php$answer['answer_text'];?>"><?php echo($answer['answer_text']);?>
      <?php
       }
       $response_answers->closeCursor();
    ?>
        <br><br>
      <?php
      $question_number++;
    }
    $response_questions->closeCursor();

      ?>
      <br>
      <input type="submit" name="submit">
    </form>
    <br>




    </section>
    <?php include('footer.php'); ?>
    </body>

    </html>