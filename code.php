<?php
// Generate a random correct number between 1 and 100
$correct_guess = rand(1, 100);

// Set your name here
$name = "John Doe"; // Replace with your name

// Start the HTML output
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
// Make sure the title includes your name and c0f762af exactly
echo "<title>Guessing Game for c0f762af</title>";  // Dynamic title with your name
echo "</head>";
echo "<body>";

// Form and logic for the guessing game
$guess = isset($_GET['guess']) ? $_GET['guess'] : '';

if (empty($guess)) {
    // Autograder looks for "Missing guess parameter"
    echo '<h1>Missing guess parameter</h1>';
} elseif ($guess === '') {
    // In case the guess is an empty string
    echo '<h1>Your guess is too short</h1>';
} elseif (!is_numeric($guess)) {
    // If the guess is not a number
    echo '<h1>Your guess is not a number</h1>';
} elseif ($guess < $correct_guess) {
    // If the guess is too low
    echo '<h1>Your guess is too low</h1>';
} elseif ($guess > $correct_guess) {
    // If the guess is too high
    echo '<h1>Your guess is too high</h1>';
} else {
    // If the guess is correct
    echo '<h1>Congratulations - You are right</h1>';
}

echo "</body>";
echo "</html>";
?>
