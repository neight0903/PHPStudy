<?php 
require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Index();

$app->getComment10();

foreach ($app->getValues()->chats as $chat) {
  $name = h($chat->name);
  $comment = h($chat->comment);

  $log = '<li><a class="user">' . $name . '</a> : <a class="comment">' . $comment . '</a></li>';

  print_r($log);
}


