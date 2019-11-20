<?php

namespace App\Support\FeedbackFile;

use Illuminate\Support\Facades\Storage;

class JsonFeedbackFile extends FeedbackFile
{
    
    public function getAllFeedbacks()
    {
        $storage = Storage::disk(($this->disk));

        if($storage->exists($this->filepath)) {
            $raw_data = $storage->get($this->filepath);
            $feedbacks = \json_decode($raw_data);
            
            return $feedbacks;
        }

        return null;
    }

    public function addFeedback($feedback)
    {
        $feedbacks = $this->getAllFeedbacks();

        $feedbacks[] = $feedback;
        $raw_data = \json_encode($feedbacks);
        
        Storage::disk($this->disk)->put($this->filepath, $raw_data);
    }
}