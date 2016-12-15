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
      <?= h($app->me()->name); ?> : <?= h($app->me()->email); ?> <input type="submit" value="Log Out">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>

    <h1>Chat Room</h1>
    <form action="" id="new_comment" method="post">
      <input type="hidden" name="user_id" value="<?= h($app->me()->id); ?>">
      <input type="text" id="comment" pliceholder="Input comment!">
      <div class="btn" onclick="document.getElementById('new_comment').submit();">comment</div>

      <input type="hidden" id="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    
    <ul id="chats"></ul>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
      setInterval(function() {
        $('#chats').load('_comments.php').fadeIn();
      }, 1000);
    </script>

    <script src="javascripts/chat.js"></script>
  </div>

</body>
</html>
