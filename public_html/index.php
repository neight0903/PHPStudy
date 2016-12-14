<?php

// ユーザ一覧の表示

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Index();

$app->run();


