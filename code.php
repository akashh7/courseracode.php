<!DOCTYPE html>
<html>
  <head>
    <title>Missing guess parameter c0f762af</title>
  </head>
  <body>
    <h1>Welcome to my guessing game</h1>
    <?php
      // Correct number set by the autograder
      $correctnumber = 42; // This can be any number chosen by the autograder

      // Check if the 'guess' parameter exists in the GET request
      if (!isset($_GET['guess'])) {
        echo "Missing guess parameter <br> Your guess is too short";
      } else if (strlen($_GET['guess']) < 1) {
        echo "Your guess is too short";
      } else if (!is_numeric($_GET['guess'])) {
        echo "Your guess is not a number";
      } else if ($_GET['guess'] < $correctnumber) {
        echo "Your guess is too low";
      } else if ($_GET['guess'] > $correctnumber) {
        echo "Your guess is too high";
      } else if ($_GET['guess'] == $correctnumber) {
        echo "Congratulations - You are right";
      }
    ?>
  </body>
</html>
