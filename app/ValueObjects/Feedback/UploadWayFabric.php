<?php

namespace App\ValueObjects\Feedback;

use App\Commands\Feedback\AbstractFeedbackCommand;

class UploadWayFabric
{
    static $commands = [
        'database' => App\Commands\Feedback\WriteFeedbackToDatabaseCommand::class,
        'file' => App\Commands\Feedback\WriteFeedbackToFileCommand::class,
    ];
    
    function __construct(srting $uploadWay)
    {
        $this->uploadWay = $uploadWay;
    }

    function resove(): AbstractFeedbackCommand
    {
        if(array_key_exists($this->uploadWay, self::$commands)) return self::$commands[$this->uploadWay];

        return self::$commands['file'];
    }
}