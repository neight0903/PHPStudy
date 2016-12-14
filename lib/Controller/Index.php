<?php

namespace MyApp\Controller;

class Index extends \MyApp\Contoller {
    
    public function run() {
        if (!$this->isLoggedIn()) {
            // login
        }

        // get users info
    }
}