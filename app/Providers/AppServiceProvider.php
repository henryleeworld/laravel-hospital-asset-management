<?php

namespace App\Providers;

use App\Models\Asset;
use App\Models\Hospital;
use App\Observers\AssetObserver;
use App\Observers\HospitalObserver;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Model::shouldBeStrict(!$this->app->isProduction());
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->roles()->where('role_id', 1)->first() != null;
        });

        Blade::if('user', function () {
            return auth()->check() && auth()->user()->roles()->where('role_id', 2)->first() != null;
        });
        Asset::observe(AssetObserver::class);
        Hospital::observe(HospitalObserver::class);
    }
}
