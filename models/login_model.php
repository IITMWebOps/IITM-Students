<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function submit() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $username = strtolower($username);

        $sql = "SELECT * FROM " . DB_USERS_TABLE . " WHERE username='$username'";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        $count = $sth->rowCount();

        if ($count > 0) {
            if (crypt($password, $data['encrypted_password']) == $data['encrypted_password']) {
                $user = $data;
                unset($user['encrypted_password']);
                Session::init();
                Session::set('loggedIn', true);
                Session::set('user', $user);
                Session::set('username', $user['username']);
                header('location:../');
            } else {
                header('location:../login');
            }
        } else {
            header('location:../login');
        }
    }

}
