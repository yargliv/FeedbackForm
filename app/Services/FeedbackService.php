<?php

namespace App\Services;

use Illuminate\Container\Container;

use App\Repositories\Feedback\FeedbackRepositoryFabric;

use App\Aggregates\Feedback;

use App\ValueObjects\Feedback\Name;
use App\ValueObjects\Feedback\Phone;
use App\ValueObjects\Feedback\Text;

class FeedbackService
{
    public function create($dto)
    {
        $repository_class = FeedbackRepositoryFabric::resolve($dto['uploadway']);

        $feedback = new Feedback(
            new Name($dto['name']), 
            new Phone($dto['phone']), 
            new Text($dto['text'])
        );
        
        $container = Container::getInstance();
        $repository = $container->make($repository_class);

        return $repository->create($feedback);
    }

}