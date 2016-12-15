<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller {

  public function run() {
    if (!$this->isLoggedIn()) {
      // login
      header('Location: ' . SITE_URL . '/login.php');
      exit;
    }

    // get chats
    $chatModel = new \MyApp\Model\Chat();
    // $this->setValues('chats', $chatModel->findAll());
    // $this->setValues('chats', $chatModel->getTop10());

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->post();
    }
  }

  public function getComment10() {
    $chatModel = new \MyApp\Model\Chat();
    return $this->setValues('chats', $chatModel->getTop10());
  }

  public function post() {
    $chatModel = new \MyApp\Model\Chat();
    $chatModel->create([
      'user_id' => $_POST['user_id'],
      'comment' => $_POST['comment']
    ]);
  }
}
