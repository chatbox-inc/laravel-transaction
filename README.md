# Laravel Transaction Middleware 

This - Laravel Transaction provide Auto Transaction to your Laravel Application.

## Features


## Usage 

You can use middleware `\Chatbox\LaravelTransaction\Http\Middleware\LaravelTransactionMiddleware`.

if you load `LaravelTransactionServiceProvider` (normally auto discovered),
you can use middleware alias `transact_db` .

### Global Usage

If you need transaction to your all routes, 
add middleware in the `$middleware` property of `app/Http/Kernel.php`

```php
protected $middleware = [
    // ...
    \Chatbox\LaravelTransaction\Http\Middleware\LaravelTransactionMiddleware::class
];
```

or you can apply it to middleware group by using `$middlewareGroups` property .

```php
protected $middlewareGroups = [
    // ...
    'api' => [
        // ...
        \Chatbox\LaravelTransaction\Http\Middleware\LaravelTransactionMiddleware::class
    ],
];
```

With `LaravelTransactionServiceProvider` (normally auto discovered), you can use alias `transact_db`.

```php
protected $middlewareGroups = [
    // ...
    'api' => [
        // ...
        "transact_db"
    ],
];
```

Of caurse, you can use this middleware per route if you need.