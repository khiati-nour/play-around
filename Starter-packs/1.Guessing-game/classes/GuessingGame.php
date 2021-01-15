<?php
session_start();
class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $guessNumber;
    public $try=0;
    // TODO: set a default amount of max guesses
    public function __construct( int $maxGuesses = 3)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility


        $this->maxGuesses =$maxGuesses;
        if(!empty($_SESSION["try"])){
            $this->try = $_SESSION["try"];}
    }
    public function generateSecretNumber(){




        if (empty($this->secretNumber)){
            $this->secretNumber =rand(1,10);
            $_SESSION["secretNumber"] = $this->secretNumber;
            var_dump($this->secretNumber);

        }
        return  $this->secretNumber;


    }


    public function run()
    {
       $this-> generateSecretNumber();
       $this->guessNumber=$_POST['guessNumber'];

        if(!empty($_POST['guessNumber'])){
            $this->try++;
            if ($this->guessNumber == $this->secretNumber) {
               $this->playerWins();
            } else if ($this->guessNumber == $this->secretNumber - 1) {
                $this->close();
            } else {
               $this->playerLoses();
            }

        }

        $_SESSION["try"] = $this->try;
        //var_dump($_SESSION["attempts"]);
        //var_dump($this->attempts);
        if($this->try > 3){
            $this->playerLoses();
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
        echo "Awesome! You number {$this->guessNumber} was correct. You can be named many things, hungry not being one of them.";

    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        echo "Bummer... You guessed {$this->guessNumber} and the secret number was {$this->secretNumber} ";
        $this->reset();
    }
    public function close(){
        echo "So close, but you just missed it! Are you in a class that started on the thirteenth or what?";

    }
    public function reset()
    {
        $_SESSION["try"] = 0;
        $this->try = 0;    }
}