<?php
// Set the correct number for the guessing game
$correctNumber = 70; // Change the correct number to 70

// Add your name or identifier to the title
$title = "Guessing Game - c0f762af";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <form method="GET" action="">
        <label for="guess">Enter your guess:</label>
        <input type="text" id="guess" name="guess">
        <button type="submit">Submit</button>
    </form>
    <?php
    // Check if the 'guess' parameter is set
    if (!isset($_GET['guess'])) {
        echo "Please enter your guess in the form above.";
    } else {
        $guess = $_GET['guess'];

        // Check if the guess is empty
        if (strlen($guess) < 1) {
            echo "Your guess is too short";
        } 
        // Check if the guess is numeric
        else if (!is_numeric($guess)) {
            echo "Your guess is not a number";
        } 
        // Compare the guess with the correct number
        else {
            $guess = (int)$guess;
            if ($guess < $correctNumber) {
                echo "Your guess is too low";
            } else if ($guess > $correctNumber) {
                echo "Your guess is too high";
            } else {
                echo "Congratulations - You are right";
            }
        }
    }
    ?>
</body>
</html>
