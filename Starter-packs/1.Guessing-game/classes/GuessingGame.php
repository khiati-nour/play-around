<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $guessNumber;
    public $i;
    // TODO: set a default amount of max guesses
    public function __construct( )
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility

        $this->secretNumber = rand(1,3);
        $this->maxGuesses=$_POST['maxGuesses'];
        $this->guessNumber=$_POST['guessNumber'];
    }
    public function runAgain(){
        $this -> i=0;
        echo "try {$this->i}";
        while(($this-> i < $this ->maxGuesses) ||($this->guessNumber == $this->secretNumber) ){
            $this-> run();
            $this -> i ++;
        }
        echo $this->i;
    }

    public function run()
    {   /*echo $this->guessNumber.'</br>';*/
        echo $this->maxGuesses.'</br>';
      /*  echo $this->secretNumber.'</br>';*/
        $this->i = 0;
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)


            if ($this->guessNumber == $this->secretNumber) {
                echo "Awesome! You number {$this->guessNumber} was correct. You can be named many things, hungry not being one of them.";

            } else if ($this->guessNumber == $this->secretNumber - 1) {
                echo "So close, but you just missed it! Are you in a class that started on the thirteenth or what?";


            } else {
                echo "Bummer... You guessed {$this->guessNumber} and the secret number was {$this->secretNumber} ";

            }

        }




        // TODO: check if a secret number has been generated yet
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        // TODO: check if the player has submitted a guess
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game


    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
    }
}