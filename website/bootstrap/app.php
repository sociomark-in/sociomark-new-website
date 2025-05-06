<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

    // ✅ Register AuthServiceProvider here
    ->withProviders([
        App\Providers\AuthServiceProvider::class,
    ])

    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        // api: __DIR__.'/../routes/api.php', // Include API routes if needed
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'web' => \App\Http\Middleware\LogVisit::class,
        ]);
    })
    
    

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
