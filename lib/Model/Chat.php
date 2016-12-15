<?php
namespace MyApp\Model;

class Chat extends \MyApp\Model {
  public function getChats() {
    $stmt = $this->_db->query("select * from chats order by id desc");
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    return $stmt->fetchAll();
  }
}