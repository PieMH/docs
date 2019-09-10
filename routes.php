<?php

use Illuminate\Routing\Router;

/** @var $routing Lkeio\Bases\Routing */

$routing->router->group(['namespace' => 'Educasoftware\Docs\Controller', 'prefix' => 'docs'], function (Router $router) {
    $router->get('/', ['name' => 'docs.index', 'uses' => 'DocsController@index']);
});