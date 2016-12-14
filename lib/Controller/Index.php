<?php

namespace MyApp\Controller;

class Index extends \MyApp\Contoller {
    
    public function run() {
        // loginしていない場合はログイン画面へ
        if (!$this->isLoggedIn()) {
            // login画面へ
            header('Location: ' . SITE_URL . '/login.php');
            exit;
        }

        // get users info
    }
}