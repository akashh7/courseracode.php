<?php
// Generate a random correct number between 1 and 100
$correct_guess = rand(1, 100);

// Set your name here
$name = "John Doe"; // Replace with your name

// Display the dynamic title
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Guessing Game for $name c0f762af</title>";  // Dynamic title with your name
echo "</head>";
echo "<body>";

// Form and logic for the guessing game
$guess = isset($_GET['guess']) ? $_GET['guess'] : '';

if (empty($guess)) {
    echo '<h1>Missing guess parameter</h1>';
} elseif ($guess === '') {
    echo '<h1>Your guess is too short</h1>';
} elseif (!is_numeric($guess)) {
    echo '<h1>Your guess is not a number</h1>';
} elseif ($guess < $correct_guess) {
    echo '<h1>Your guess is too low</h1>';
} elseif ($guess > $correct_guess) {
    echo '<h1>Your guess is too high</h1>';
} else {
    echo '<h1>Congratulations - You are right</h1>';
}

echo "</body>";
echo "</html>";
?>
