<?php foreach ($app->getValues()->chats as $chat) : ?>
  <li><a class="user"><?= h($chat->user_id); ?></a> : <a class="comment"><?= h($chat->comment); ?></a></li>
<?php endforeach; ?>