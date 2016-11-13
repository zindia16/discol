<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;


Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->extensions(['json','xml']);
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/templates/*', ['controller' => 'Templates', 'action' => 'index']);
    $routes->connect('/app', ['controller' => 'Pages', 'action' => 'app']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks('DashedRoute');
});

Router::prefix('admin', function ($routes) {
    // All routes here will be prefixed with `/admin`
    // And have the prefix => admin route element added.
    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('api', function ($routes) {
    $routes->extensions(['json','xml']);
    $routes->resources('Users');
    $routes->resources('Contents');
    $routes->resources('Comments');
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
