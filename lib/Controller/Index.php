<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller {

  public function run() {
    if (!$this->isLoggedIn()) {
      // login
      header('Location: ' . SITE_URL . '/login.php');
      exit;
    }

    // get users info
    // $userModel = new \MyApp\Model\User();
    // $this->setValues('users', $userModel->findAll());
    
    // get chats
    $chatModel = new \MyApp\Model\Chat();
    // $this->setValues('chats', $chatModel->findAll());
    // $this->setValues('chats', $chatModel->getTop10());
  }

  public function getComment() {
    $chatModel = new \MyApp\Model\Chat();
    return $this->setValues('chats', $chatModel->getTop10());
  }

  public function post() {
    try {
      $this->_validateToken();
    } catch (\MyApp\Exception\InvalidComment $e) {
        $this->setErrors('comment', $e->getMessage());
    }

    $chatModel = new \MyApp\Model\Chat();
    $chatModel->create([
      'user_id' => $_POST['user_id'],
      'comment' => $_POST['comment']
    ]);
  }

  private function _validateToken() {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      echo "Invalid Token!";
      exit;
    }
  }

}
