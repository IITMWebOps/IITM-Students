<?php

class Main {

    function __construct() {
        $url = $_GET['url'];
        if (!(strtolower($url) == $url)) {
            $url = strtolower($url);
            header('Location:' . URL . $url);
        }
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if (empty($url[0])) {
            $url[0] = 'home';
        } else if (preg_match('/^([a-z][a-z]\d\d[a-z]\d\d\d)$/i', $url[0])) {
            $rollno = $url[0];
            if (isset($url[1])) {
                header('Location:' . URL . $rollno);
            }
            $url = array('profile', 'student', $rollno);
        }

        $controllerloc = 'controllers/' . $url[0] . '.php';
        if (file_exists($controllerloc)) {
            require $controllerloc;
            $controller = new $url[0];
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            return FALSE;
        }


        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }

}
