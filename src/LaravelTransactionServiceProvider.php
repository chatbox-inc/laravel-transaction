<?php
namespace Chatbox\LaravelTransaction;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LaravelTransactionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /** @var Router $router */
        $router = app(Router::class);
        $router->aliasMiddleware("transact_db",LaravelTransactionMiddleware::class);
    }
}
