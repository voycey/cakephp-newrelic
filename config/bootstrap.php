<?php

use Cake\Event\EventManager;
use Voycey\NewRelicMiddleware;

EventManager::instance()->on(
    'Server.buildMiddleware',
    function ($event, $middleware) {
        $middleware->add(new NewRelicMiddleware());
    });