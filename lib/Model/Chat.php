<?php
namespace MyApp\Model;

class Chat extends \MyApp\Model {

  public function create($values) {
    $stmt = $this->db->prepare("insert into chats (user_id, comment) values (:user_id, :comment)");

    $res = $stmt->execute([])
    
  }

  public function findAll() {
    $stmt = $this->db->query("select * from chats order by id desc");
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    return $stmt->fetchAll();
  }

}