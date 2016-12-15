<?php 
require_once(__DIR__ . '/../config/config.php');

// var_dump($_SESSION['me']);

$app = new MyApp\Controller\Index();

$chats = $app->getComment();

foreach ($chats as $chat) {
  $name = h($chat->name);
  $comment = h($chat->comment);

  $log = '<li><a class="user">' . $name . '</a> : <a class="comment">' . $comment . '</a></li>';

  print_r($log);
}


