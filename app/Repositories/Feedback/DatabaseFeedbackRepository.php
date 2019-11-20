<?php

namespace App\Repositories\Feedback;

use App\Feedback as FeedbackEloquentModel;

use App\Contracts\IFeedbackRepository;
use App\Aggregates\Feedback;

class DatabaseFeedbackRepository implements IFeedbackRepository
{
    function __construct(FeedbackEloquentModel $model)
    {
        $this->model = $model;
    }

    public function create(Feedback $feedback)
    {
        // $this->model->name = $feedback->getName();
        // $this->model->phone = $feedback->getPhone();
        // $this->model->text = $feedback->getText();

        $this->model->fill([
            'name' => $feedback->getName(), 
            'phone' => $feedback->getPhone(), 
            'text' => $feedback->getText(),
        ]);

        $this->model->save();
    }

}