<?php

namespace Core;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

class Base {

    private $routeCollection;
    private $controller;
    private $action;

    /*
     * Match the request with the route collection, get response from controller
     */

    public function match(RouteCollection $routeCollection) {
        $this->routeCollection = $routeCollection;
        $request = Request::createFromGlobals();
        $context = new RequestContext('/');
        $context->fromRequest($request);
        $matcher = new UrlMatcher($routeCollection, $context);

        $parameters = $matcher->match($request->getPathInfo());

        $this->getController($parameters);
        $args = $this->getArgs($parameters);
        $response = $this->getResponse($args);

        return $response;
    }

    private function getController($parameters) {
        $array = explode(':', $parameters["_controller"]);
        $this->controller = "Controller\\" . ucfirst($array[0]);
        $this->action = $array[1];
    }

    private function getArgs($parameters) {
        $args = [];
        $route = $this->routeCollection->get($parameters["_route"]);
        $cRoute = $route->compile();
        $requirements = $cRoute->getVariables();

        foreach ($requirements as $requirement) {
            if (isset($parameters[$requirement])) {
                $args[$requirement] = $parameters[$requirement];
            }
        }

        return $args;
    }

    private function getResponse($args) {
        $class = new $this->controller();

        if (count($args) > 0) {
            $response = call_user_func_array([$class, $this->action], $args);
        } else {
            $response = call_user_func([$class, $this->action]);
        }

        return $response;
    }

}
