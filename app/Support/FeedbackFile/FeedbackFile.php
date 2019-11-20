<?php

namespace App\Support\FeedbackFile;

abstract class FeedbackFile
{
    protected $filepath;
    protected $disk='public';

    function __construct($filepath='/feedbacks/feedbacks.json')
    {
        $this->setFilepath($filepath);
    }

    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;
    }

    abstract public function getAllFeedbacks();
    abstract public function addFeedback($feedback);

}