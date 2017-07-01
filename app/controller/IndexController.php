<?php

namespace Controller;

use Core\Controller;

class IndexController extends Controller {

    public function index() {
        $this->render('index/index');
    }

}
