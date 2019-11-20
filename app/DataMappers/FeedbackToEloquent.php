<?php

namespace App\DataMappers;

use App\Aggregates\Feedback;

use App\Feedback as EloquentModelClass;

class FeedbackToEloquent
{
    private $eloquentModelClass;
    
    function __construct()
    {
        $this->eloquentModelClass = EloquentModelClass::class;
    }

    function map($feedback)
    {
        $model = new $this->EloquentModelClass;
        $model->fill($feedback->toArray());

        return $model;
    }

    function persist(Feedback $feedback)
    {
        $model = $this->map($feedback);
        $model->save();
    }
}