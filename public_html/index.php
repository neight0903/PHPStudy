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
    <form action="" id="new_comment_form">
      <input type="hidden" name="user_id" value="<?= h($app->me()->id); ?>">
      <input type="text" id="new_comment" pliceholder="Input comment!">
      <input type="hidden" id="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    
    <script>
      setInterval(function() {
        $('#chats').load('_comments.php');
        $('#chats').prepend($li.fadeIn());
      }, 500);
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="char.js"></script>
  </div>

</body>
</html>
