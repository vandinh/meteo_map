<?php

namespace Core;

class Controller {
    /*
     * Render function 
     */

    protected function render($file) {
        include ROOT_PATH . '/app/view/' . $file . '.html';
    }

}
