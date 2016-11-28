<?php
namespace Voycey\NewRelic\Middleware;

use Cake\Utility\Inflector;
use Cake\Log\Log;

class NewRelicMiddleware
{
    
    public function __invoke($request, $response, $next)
    {

        $response = $next($request, $response);

        $name = $this->nameTransaction($request);

        if (extension_loaded('newrelic')) {
            newrelic_name_transaction($name);
        }

        return $response;
    }

    /**
     * @param $request
     * @return string
     */
    public function nameTransaction($request)
    {
        $plugin = $request->getAttribute('params')['plugin'];
        $controller = $request->getAttribute('params')['controller'];
        $action = $request->getAttribute('params')['action'];
        $passed = implode('/', $request->getAttribute('params')['pass']);

        $transaction = Inflector::dasherize($controller) . '/' . $action . '/' . $passed;

        if ($plugin !== null) {
            $transaction = Inflector::dasherize($plugin) . '/' . $transaction;
        }

        debug($transaction);

        return $transaction;
    }
}