<?php

namespace App\Providers;

use App\Models\Event\Repositories\Interfaces\EventRepositoryInterface;
use App\Models\Event\Repositories\EventRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            EventRepositoryInterface::class,
            EventRepository::class
        );
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
