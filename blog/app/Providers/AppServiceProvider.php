<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        View::share([
            'code' => 200,
            'msg' => '成功',
            'data' => [
                'name' => '雷锋',
                'age' => 24
            ]
        ]);
    }
}
