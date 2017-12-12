<?php

use Illuminate\Container\Container;
use Symfony\Component\HttpFoundation\Request;

include(__DIR__.'/vendor/autoload.php');

$app = new Container();

$app->singleton('request', function() {
    return Request::createFromGlobals();
});

print_r($app->request);


/* Helpers */

if (! function_exists('app')) {
    function app($make = null)
    {
        if (is_null($make)) {
            return Container::getInstance();
        }

        return Container::getInstance()->make($make);
    }
}