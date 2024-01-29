<?php

namespace App\Providers;


use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class DataBaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::enforceMorphMap([
            'User'          => 'App\Models\User',
            'Admin'         => 'App\Models\Admin',
        ]);

    }
}
