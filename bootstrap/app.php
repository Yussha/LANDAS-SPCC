<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // for testing purposes Excluding URIs From CSRF Protection
    //     $middleware->validateCsrfTokens(except: [
    //     'stripe/*',
    //     'http://127.0.0.1:8000/register',
        
    // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
