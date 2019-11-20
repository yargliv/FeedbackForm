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
        $this->setName($name);
        $this->setPhone($phone);
        $this->setText($text);
    }

    public function getName()
    {
        return \strval($this->name);
    }

    public function setName(Name $name)
    {
        $this->name = $name;
    }

    public function getPhone()
    {
        return \strval($this->phone);
    }

    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
    }

    public function getText()
    {
        
        return \strval($this->text);
    }

    public function setText(Text $text)
    {
        $this->text = $text;
    }

}