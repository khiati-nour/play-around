<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'classes/GuessingGame.php';

// Start the game
// As this game is rather simple, one class should be sufficient
if (isset($_POST["submit"]) && (!empty($_POST["guessNumber"]))){



    $game = new GuessingGame();


    $game->run();

    echo '<h2>$game</h2>';
    echo "<pre>";
    var_dump($game);
    echo "</pre>";
    echo "<br>";

};


require 'view.php';
