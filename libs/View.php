<?php

class View {

    function __construct() {
        //echo "main view<br/>";
    }

    public function render($name, $include = TRUE) {
        if ($include == FALSE) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

}
