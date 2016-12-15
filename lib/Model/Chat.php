<?php
namespace MyApp\Model;

class Chat extends \MyApp\Model {

  public function create($values) {
    $stmt = $this->db->prepare("insert into chats (user_id, comment) values (:user_id, :comment)");

    $res = $stmt->execute([
      ':user_id' => $values['user_id'],
      ':comment' => $values['comment']
    ]);
  }

  // public function findAll() {
  //   $stmt = $this->db->query("select chats.id, chats.comment, users.name from chats, users where chats.user_id = users.id order by chats.id desc;");
  //   $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  //   return $stmt->fetchAll();
  // }

  public function getTop10() {
    $stmt = $this->db->query("select chats.id, chats.comment, users.name from chats, users where chats.user_id = users.id order by chats.id desc limit 10;");
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    return $stmt->fetchAll();
  }
}

