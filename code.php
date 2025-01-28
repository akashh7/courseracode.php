<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akash Singh c0f762af</title>  <!-- Title with your name and c0f762af -->
</head>
<body>
    <h1>Welcome to my guessing game</h1>
    
    <?php
    $correctnumber = 25;  // Set the correct number for the guessing game
    
    if (isset($_GET['guess'])) {
        // Check if guess is not a number
        if (is_numeric($_GET['guess']) === FALSE) {
            echo "Your guess is not a number";
        } 
        // Check if the guess is too low
        else if ($_GET['guess'] < $correctnumber) {
            echo "Your guess is too low";
        } 
        // Check if the guess is too high
        else if ($_GET['guess'] > $correctnumber) {
            echo "Your guess is too high";
        } 
        // Correct guess
        else if ($_GET['guess'] == $correctnumber) {
            echo "Congratulations - You are right";
        }
    } else {
        // Missing guess parameter
        echo "Missing guess parameter";  
    }
    ?>
</body>
</html>
