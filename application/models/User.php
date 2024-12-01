<?php
class UserModel extends CI_Model {
  public function getUser(string $username) {
    $this->db->where('username', $username);
    $query = $this->db->get('users');

    return $query->row();
  }
}
