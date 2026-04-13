<?php

/**
 * JAKAMO Landing — Hostinger entry point
 *
 * Ten plik należy wgrać na serwer jako:
 *   /domains/jakamo.pl/public_html/landing/index.php
 *
 * Aplikacja Laravel powinna być sklonowana do:
 *   /domains/jakamo.pl/jakamo_landing/
 */

define('LARAVEL_PUBLIC_PATH', '/domains/jakamo.pl/jakamo_landing/public');

// Ustaw właściwy document root dla asset URL-i
$_SERVER['DOCUMENT_ROOT'] = LARAVEL_PUBLIC_PATH;

$app = require_once LARAVEL_PUBLIC_PATH . '/../bootstrap/app.php';

$app->bind('path.public', function () {
    return LARAVEL_PUBLIC_PATH;
});

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
