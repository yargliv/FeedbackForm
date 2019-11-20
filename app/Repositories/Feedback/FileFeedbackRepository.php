<?php

namespace App\Repositories\Feedback;

use App\Contracts\IFeedbackRepository;

use App\Aggregates\Feedback;
use App\Support\FeedbackFile\FeedbackFile;

class FileFeedbackRepository implements IFeedbackRepository
{
    private $feedbackFile=null;

    function __construct(FeedbackFile $feedbackFile)
    {
        $this->feedbackFile = $feedbackFile;
    }

    public function create(Feedback $feedback)
    {
        $feedback_params = [
            'name' => $feedback->getName(),
            'phone' => $feedback->getPhone(),
            'text' => $feedback->getText()
        ];

        $this->feedbackFile->addFeedback($feedback_params);
    }
    
}