<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View as FacadesView;
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
        FacadesView::composer('*', function ($view) {
            $about_us = DB::table('abouts')->select(
                'title',
                'description',
                'email',
                'address',
                'phone',
                'image',
                'web_link'
            )->first();
            $view->with([
                'about_us' => $about_us,
            ]);

        });
    }
}
