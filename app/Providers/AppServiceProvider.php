<?php

namespace App\Providers;
Use View;
Use DB;
Use App\Adminmenu;
Use App\SiteConfig;
use Laravel\Passport\Passport;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes();
        Schema::defaultStringLength(191);
        View::composer('*', function($view)
        {
            $adminmenus=\App\Adminmenu::wherenull('parentid')->where('showinnav',1)->with('childrenformenu')->get();
            $siteConfig = SiteConfig::findOrFail(1);
            $view->with('navs',$adminmenus)->with('siteConfig',$siteConfig);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
