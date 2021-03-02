<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Helper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $destinationData = Helper::getDestination();
        $regionData = Helper::getRegion();
        $menuData = [
            'destinationData' => $destinationData,
            'regionData' => $regionData
        ];
        
        view()->share('menuData', $menuData);
    }
}
