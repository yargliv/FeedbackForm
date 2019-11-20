<?php

namespace App\ValueObjects\Feedback;

class Text
{
    private $text;

    function __construct(string $text)
    {
        if($this->validate($text)) {
            $this->setName($text);
        }
    }

    public function setName($text)
    {
        $this->text = $text;
    }

    public function validate($text)
    {
        return true;
    }

    function __toString()
    {
        return $this->text;
    }
}