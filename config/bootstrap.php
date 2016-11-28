<?php

use Cake\Event\EventManager;
use Voycey\NewRelic\Middleware\NewRelicMiddleware;

EventManager::instance()->on(
    'Server.buildMiddleware',
    function ($event, $middleware) {
        $middleware->add(new NewRelicMiddleware());
    });