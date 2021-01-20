<?php
session_start();
class RockPaperScissors
{
    public $computerGuess;
    public $score=0;
    public function __construct(){

        if(!empty($_SESSION["score"])){
            $this->score = $_SESSION["score"];}
    }
    public function generateComputerGuess(){
        $pick = ["scissors", "rock", "paper"];
       $this->computerGuess = $pick[ array_rand($pick)];
       return $this->computerGuess;
    }
    public function run()
    { $this->generateComputerGuess();
        if (empty($this->score)){
            $this->score =0;
            $_SESSION["score"] = $this->score;
            var_dump($this->score);

        }
        if(isset($_POST['rock'])){

        if( $this->computerGuess == 'rock'){
            echo "rock VS  {$this->computerGuess}.</br>. Draw";
        }else if ( $this->computerGuess == 'scissors'){

            echo "rock VS {$this->computerGuess}.</br>. You win";
            $_SESSION['score']++;

        }else if ( $this->computerGuess =='paper'){
            echo "rock VS {$this->computerGuess}</br>You lose";
        }}
            if(isset($_POST['scissors'])){
                $this->score++;
                if( $this->computerGuess == 'scissors'){
                    echo "scissors VS  {$this->computerGuess}.</br>. Draw";
                }else if ( $this->computerGuess == 'paper'){
                    echo "scissors VS {$this->computerGuess}.</br>. You win";
                    $_SESSION['score']++;
                }else if ( $this->computerGuess =='rock'){
                    echo "scissors VS {$this->computerGuess}</br>You lose";
                }}
                if(isset($_POST['paper'])){
                    $this->score++;
                    if( $this->computerGuess == 'paper'){
                        echo "paper VS  {$this->computerGuess}.</br>. Draw";
                    }else if ( $this->computerGuess == 'rock'){
                        echo "paper VS {$this->computerGuess}.</br>. You win";
                        $_SESSION['score']++;
                    }else if ( $this->computerGuess =='scissors'){
                        echo "paper VS {$this->computerGuess}</br>You lose";
                    }}


        // This function functions as your game "engine"
        // Now it's on to you to take the steering wheel and determine how it will work
    }
}