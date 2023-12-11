<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
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
        view()->composer('main.partials.bpm', function ($view) {
            $view->with('petbpm', DB::select('select bpm from pet_status Where sid=(SELECT max(sid) FROM pet_status)'));

        });

        view()->composer('main.partials.temperature', function ($view) {
            $view->with('pettemperature', DB::select('select temp from pet_status Where sid=(SELECT max(sid) FROM pet_status)'));

        });

        view()->composer('main.partials.tmp', function ($view) {
            $view->with('pettemperature', DB::select('select temp from pet_status Where sid=(SELECT max(sid) FROM pet_status)'));

        });


        view()->composer('main.partials.movement', function ($view) {
            $view->with('petmovement', DB::select('select movement from pet_status Where sid=(SELECT max(sid) FROM pet_status)'));

        });

        view()->composer('main.partials.pets', function ($view) {
            $view->with('petlist', DB::select('select * from pet'));

        });
    }
}
