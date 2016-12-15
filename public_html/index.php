<?php

require_once(__DIR__ . '/../config/config.php');

// var_dump($_SESSION['me']);

$app = new MyApp\Controller\Index();

$app->run();

// $app->me()
// $app->getValues()->users

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheets/stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <form action="logout.php" method="post" id="logout">
      <?= h($app->me()->email); ?> <input type="submit" value="Log Out">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>

    <h1>Chat room</h1>
    <form action="">
      <input type="hidden" name="user_id" value="<?= h($app->me()->id); ?>">
      <input type="text" id="new_comment" pliceholder="Input comment!">
    </form>
    
    <ul>
    <?php foreach ($app->getChats()->chats as $chat) : ?>
      <li><?= h($chat->user_id); ?> : <?= h($chat->comment); ?></li>
    <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
