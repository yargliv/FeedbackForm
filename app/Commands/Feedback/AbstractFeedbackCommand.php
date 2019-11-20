<?php

namespace App\Commands\Feedback;

use App\Aggregates\Feedback;

abstract class AbstractFeedbackCommand
{
    abstract public function execute(Feedback $feedback);
}