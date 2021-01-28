<?php

class Blackjack
{
public $card;
public $value;
public $img;
    function __construct($card, $value,$img) {
        $this->card = $card;
        $this->value = $value;
        $this->img =$img;
    }


function get_value() {

    return $this->value;

}
function get_img() {

    return $this->img;

}





































}