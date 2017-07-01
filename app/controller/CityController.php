<?php

namespace Controller;

use Core\Api;

class CityController {
    /*
     * GET request for /cities endpoint
     */

    public function index() {
        $response = Api::get('cities');

        return $response;
    }

    /*
     * GET request for /cities/{name} endpoint
     */

    public function show($name) {
        $response = Api::get('cities/' . $name);

        return $response;
    }

}
