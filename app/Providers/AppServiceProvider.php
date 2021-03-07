<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Helper;
use App\Models\Setting;

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

        $this->app->bind('path.public', function () {
            return base_path('');
        });

        $destinationData = Helper::getDestination();
        $regionData = Helper::getRegion();
        $settingData = Setting::first();
        $menuData = [
            'destinationData' => $destinationData,
            'regionData' => $regionData,
            'settingData' => $settingData,
        ];

        view()->share('menuData', $menuData);
    }
}
