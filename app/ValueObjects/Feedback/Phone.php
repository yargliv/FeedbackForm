<?php

namespace App\ValueObjects\Feedback;

class Phone
{
    private $phone;

    function __construct(string $phone)
    {
        if($this->validate($phone)) {
            $this->setName($phone);
        }
    }

    public function setName($phone)
    {
        $this->phone = $phone;
    }

    public function validate($phone)
    {
        return true;
    }

    function __toString()
    {
        return $this->phone;
    }
}