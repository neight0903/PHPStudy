<?php

// 新規登録

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>
<body>
  <div id="container">
    <form action="" method="post">
      <p>
        <input type="text" name="email" placeholder="email">
      </p>
      <p class="err"><?= h($app->getErrors('email')); ?>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <p class="err"><?= h($app->getErrors('password')); ?>
      <div class="btn" onclick="document.getElementById('signup').submit();" >Sign Up</div>
      <p class="fs12"><a herf="/login.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
