<?php

namespace App\Contracts;

use App\Aggregates\Feedback;

interface IFeedbackRepository
{
    public function create(Feedback $feedback);

}