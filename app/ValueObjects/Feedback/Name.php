<?php

namespace App\ValueObjects\Feedback;

class Name
{
    private $name;

    function __construct(string $name)
    {
        if($this->validate($name)) {
            $this->setName($name);
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function validate($name)
    {
        return true;
    }

    function __toString()
    {
        return $this->name;
    }
}