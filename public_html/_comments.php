<?php foreach ($app->getValues()->chats as $chat) : ?>
  <li><a class="user"><?= h($chat->user); ?></a> : <a class="comment"><?= h($chat->comment); ?></a></li>
<?php endforeach; ?>