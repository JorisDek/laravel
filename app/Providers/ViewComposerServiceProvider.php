<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeNavigation() {

        view()->composer('particles.nav', 'App\Http\Composers\NavigationComposer@compose');
        // view()->composer('particles.nav', function($view){
        //     $view->with('latest', Article::latest()->first());
        // });
    }
}
