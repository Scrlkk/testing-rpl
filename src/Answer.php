<?php

class Answer
{
    public function getYesNoAnswer($prompt)
    {
        $answer = $this->readUserInput($prompt);

        $answer = strtolower($answer);
        if (($answer == "yes") || ($answer == "no")) {
            return $answer;
        } else {
            return null;
        }
    }

    public function readUserInput($prompt)
    {
        return readline($prompt);
    }

}