<?php
// model
class user extends CI_Model {
     function get_all_users()
     {
         return $this->db->query("SELECT * FROM users")->result_array();
     }
     function get_user_by_email($email)
     {
         return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
     }
     function add_user($user)
     {
         $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES(?,?,?,?,?,?)";
         $values = array($user['first'], $user['last'], $user['email'], $user['password'], date("m-d-Y, H:i:s"), date("m-d-Y, H:i:s")); 
         return $this->db->query($query, $values);
     }
}
?>