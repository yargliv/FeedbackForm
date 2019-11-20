<?php

namespace App\Commands\Feedback;

use App\Aggregates\Feedback;
use App\DataMappers\FeedbackToEloquent;

class WriteFeedbackToDatabaseCommand extends AbstractFeedbackCommand
{
    function __construct(FeedbackToEloquent $mapper)
    {
        $this->mapper = $mapper;
    }

    public function execute(Feedback $feedback)
    {
        $this->mapper->persists($feedback);
    }
}