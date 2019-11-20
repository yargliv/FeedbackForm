<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Support\FeedbackFile\FeedbackFile;
use App\Support\FeedbackFile\JsonFeedbackFile;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FeedbackFile::class, JsonFeedbackFile::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
