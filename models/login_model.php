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

        $sql = "SELECT * FROM ".DB_USERS_TABLE." WHERE username='$username'";

        $login = mysql_query($sql);
        $count = mysql_num_rows($login);

        if ($count > 0) {
            $row = mysql_fetch_array($login);
            if (crypt($password, $row['encrypted_password']) == $row['encrypted_password']) {
                Session::init();
                Session::set('loggedIn', true);
                Session::set('username', $username);
                header('location:../');
            } else {
                header('location:../login');
            }
        } else {
            header('location:../login');
        }
    }

}
