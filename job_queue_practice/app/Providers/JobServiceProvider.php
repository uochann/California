<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jobs\PracticeJob;

class JobServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindMethod([PracticeJob::class, 'handle'], function($job, $app) {
            return $job->handle();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
