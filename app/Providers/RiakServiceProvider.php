<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Myproject\Riak\DemoInterface;
use App\Myproject\Riak\DemoProvider;
use App\Myproject\Riak\DemoProvider2;


class RiakServiceProvider extends ServiceProvider
{
	//protected $defer = FALSE;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(DemoInterface::class,DemoProvider2::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
