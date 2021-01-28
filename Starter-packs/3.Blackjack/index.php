<?php
declare(strict_types = 1);

// Require the correct variable typsession_start();e to be used (no auto-converting)


// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
ini_set('memory_limit', '512M');
require_once 'Blackjack.php';
// So, you've reached the final stage huh?
// TODO: pat yourself on the back
// Great job! This means you've earned the freedom to build this exercise from scratch.
// One final word of advice: this game is much more complex, so you might want to use multiple classes in here.

session_start();
/*if (!empty($_POST['submit'])) */{
    $cards = [
        new Blackjack('2D', '2', 'images/2D.png'),
        new Blackjack('2C', '2', 'images/2C.png'),
        new Blackjack('2H', '2', 'images/2H.png'),
        new Blackjack('2S', '2', 'images/2S.png'),
        new Blackjack('3D', '3', 'images/3D.png'),
        new Blackjack('3C', '3', 'images/3C.png'),
        new Blackjack('3H', '3', 'images/3H.png'),
        new Blackjack('3S', '3', 'images/3S.png'),
        new Blackjack('4S', '4', 'images/4S.png'),
        new Blackjack('4D', '4', 'images/4D.png'),
        new Blackjack('4C', '4', 'images/4C.png'),
        new Blackjack('4H', '4', 'images/4H.png'),
        new Blackjack('5S', '5', 'images/5S.png'),
        new Blackjack('5D', '5', 'images/5D.png'),
        new Blackjack('5C', '5', 'images/5C.png'),
        new Blackjack('5H', '5', 'images/5H.png'),
        new Blackjack('6S', '6', 'images/6S.png'),
        new Blackjack('6D', '6', 'images/6D.png'),
        new Blackjack('6C', '6', 'images/6C.png'),
        new Blackjack('6H', '6', 'images/6H.png'),
        new Blackjack('7S', '7', 'images/7S.png'),
        new Blackjack('7D', '7', 'images/7D.png'),
        new Blackjack('7C', '7', 'images/7C.png'),
        new Blackjack('7H', '7', 'images/7H.png'),
        new Blackjack('8S', '8', 'images/8S.png'),
        new Blackjack('8D', '8', 'images/8D.png'),
        new Blackjack('8C', '8', 'images/8C.png'),
        new Blackjack('8H', '8', 'images/8H.png'),
        new Blackjack('9S', '9', 'images/9S.png'),
        new Blackjack('9D', '9', 'images/9D.png'),
        new Blackjack('9C', '9', 'images/9C.png'),
        new Blackjack('9H', '9', 'images/9H.png'),
        new Blackjack('10S', '10', 'images/10S.png'),
        new Blackjack('10D', '10', 'images/10D.png'),
        new Blackjack('10C', '10', 'images/10C.png'),
        new Blackjack('10H', '10', 'images/10H.png'),
        new Blackjack('AS', '11', 'images/AS.png'),
        new Blackjack('AD', '11', 'images/AD.png'),
        new Blackjack('AC', '11', 'images/AC.png'),
        new Blackjack('AH', '11', 'images/AH.png'),
        new Blackjack('JS', '10', 'images/JS.png'),
        new Blackjack('JD', '10', 'images/JD.png'),
        new Blackjack('JC', '10', 'images/JC.png'),
        new Blackjack('JH', '10', 'images/JH.png'),
        new Blackjack('KS', '10', 'images/KS.png'),
        new Blackjack('KD', '10', 'images/KD.png'),
        new Blackjack('KC', '10', 'images/KC.png'),
        new Blackjack('KH', '10', 'images/KH.png'),
        new Blackjack('QS', '10', 'images/QS.png'),
        new Blackjack('QD', '10', 'images/QD.png'),
        new Blackjack('QC', '10', 'images/QC.png'),
        new Blackjack('QH', '10', 'images/QH.png'),
    ];


    $chosenCardsPlayer = array();
    $Player = array();
    $sessions = array();

    for ($i = 0; $i <= 1; $i++) {


        $randomCard = $cards[array_rand($cards)];
        $chosenCardsPlayer[] = $randomCard;
        /* unset($cards[$randomCard]);*/

    }
    /* for($s = 0; $s <= count($chosenCardsPlayer); $s++){
         unset($cards[$chosenCardsPlayer[$s]]);
     }*/
    /*$newCards = array_diff($cards,$chosenCardsPlayer);
  var_dump($newCards);*/

    for ($j = 0; $j <= count($chosenCardsPlayer) - 1; $j++) {

        $Player[] = $chosenCardsPlayer[$j]->get_value();

       /* $_SESSION["img"] = $chosenCardsPlayer[$j]->get_img();*/
        $_SESSION["img"] = $chosenCardsPlayer[$j];
        $sessions[] = $_SESSION["img"];
    }
    /*var_dump($sessions);*/

 var_dump($sessions);
    $chosenCardsComputer = array();
    $Computer = array();
    for ($i = 0; $i <= 1; $i++) {

        $chosenCardsComputer[] = $cards[array_rand($cards)];
        $Computer[] = $chosenCardsComputer[$i]->get_value();

    }

    $sumPlayer = array_sum($Player);


    $sumComputer = array_sum($Computer);

    if ($sumPlayer <= 21 && $sumPlayer > $sumComputer) {
        $result = "you win";

    } else {
        $result = "STAY OR HIT";
        if (!empty($_POST['hit'])) {
            /*for($k=0;$k<=count($chosenCardsPlayer); $k++){
                $chosenCardsPlayer[$k]= $sessions[$k];
            }*/
            $newCard = $cards[array_rand($cards)];
            $chosenCardsPlayer [] = $newCard;

            $sumPlayer = $sumPlayer + $newCard->get_value();

            if ($sumPlayer <= 21 && $sumPlayer > $sumComputer) {
                $result = "you win";
            } else {
                $result = "you lose";
            }

        } else if (!empty($_POST['stay'])) {
            if ($sumPlayer <= 21 && $sumPlayer > $sumComputer) {
                $result = "you win";
            } else {
                $result = "you lose";
            }


        }


        echo "<pre>";
        var_dump($chosenCardsPlayer);
        echo "</pre>";
        echo "<br>";


    }
}

require 'view.php';