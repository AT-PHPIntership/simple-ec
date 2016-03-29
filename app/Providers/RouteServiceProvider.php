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
    const ADMIN_PATH = 'admin';
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
        if ($request->segment(1) == self::ADMIN_PATH) {
            $namespace = $this->namespace[0];
        } else {
            $namespace = $this->namespace[1];
        }
        $router->group(['namespace' => $namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
