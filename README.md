# NewRelic Middleware for CakePHP 3.3

[![Latest Stable Version](https://poser.pugx.org/voycey/cakephp-newrelic/version)](https://packagist.org/packages/voycey/cakephp-newrelic)
[![Total Downloads](https://poser.pugx.org/voycey/cakephp-newrelic/downloads)](https://packagist.org/packages/voycey/cakephp-newrelic)
[![Latest Unstable Version](https://poser.pugx.org/voycey/cakephp-newrelic/v/unstable)](//packagist.org/packages/voycey/cakephp-newrelic)
[![License](https://poser.pugx.org/voycey/cakephp-newrelic/license)](https://packagist.org/packages/voycey/cakephp-newrelic)

Provides transaction naming based on Controller/Action/Params in NewRelic

## Installation

```composer require voycey/cakephp-newrelic```

or Add:

```"voycey/cakephp-newrelic": "~0.1"``` to your composer.json

## Enable it

Add ```Plugin::load('Voycey/NewRelic', ['bootstrap' => true]);``` to your bootstrap.php to load the Plugin

## TODO

* Give option to exclude all paramters passed to URL




