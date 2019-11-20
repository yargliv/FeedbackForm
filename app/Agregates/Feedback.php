<?php

namespace App\Aggregates;

use App\ValueObjects\Feedback\Name;
use App\ValueObjects\Feedback\Phone;
use App\ValueObjects\Feedback\Text;

class Feedback
{
    private $name;
    private $phone;
    private $text;

    function __construct(Name $name, Phone $phone, Text $text)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->text = $text;
    }

}