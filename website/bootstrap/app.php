<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckGate;
use App\Http\Middleware\EditOwnProfile;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

    // Register service providers
    ->withProviders([
        App\Providers\AuthServiceProvider::class,
    ])

    // Routing configuration
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    // Middleware aliases
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            'canGate' => CheckGate::class,
            'edit-profile' => EditOwnProfile::class,
        ]);
    })

    // Exception handling (optional customization)
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })

    ->create();
