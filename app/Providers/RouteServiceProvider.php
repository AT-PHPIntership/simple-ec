<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = [
        'App\Http\Backend\Controllers',
        'App\Http\Frontend\Controllers',
    ];


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param \Illuminate\Routing\Router $router router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param Router  $router  router
     * @param Request $request router
     *
     * @return void
     */
    public function map(Router $router, Request $request)
    {
        $router->group(['namespace' => $this->namespace[0]], function ($router) {
            require app_path('Http/Backend/routes.php');
        });
        $router->group(['namespace' => $this->namespace[1]], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
