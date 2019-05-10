<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class SiteProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('layouts.base', 'App\Providers\ViewComposers\SizeComposer');
		View::composer('layouts.base', 'App\Providers\ViewComposers\LangComposer');
        View::composer('layouts.base', 'App\Providers\ViewComposers\BreadcrumbsComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
