<?php

namespace App\Repositories\Feedback;

use App\Repositories\Feedback\DatabaseFeedbackRepository;
use App\Repositories\Feedback\FileFeedbackRepository;

class FeedbackRepositoryFabric
{
    static $repositories = [
        'file_save' => FileFeedbackRepository::class,
        'database_save' => DatabaseFeedbackRepository::class,
    ];

    static function resolve($uploadWay)
    {
        if(array_key_exists($uploadWay, self::$repositories)) {
            return self::$repositories[$uploadWay];
        }

        return FileFeedbackRepository::class;
    }
}