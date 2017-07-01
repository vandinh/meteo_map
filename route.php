<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$route = new Route('/', array('_controller' => 'IndexController:index'));
$route->setMethods('GET');
$routes->add('index', $route);
$route = new Route('/cities', array('_controller' => 'CityController:index'));
$route->setMethods('GET');
$routes->add('cities', $route);
$route = new Route('/cities/{name}', ['_controller' => 'CityController:show']);
$route->setMethods('GET');
$routes->add('city', $route);
