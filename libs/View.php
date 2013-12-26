<?php

class View {

    function __construct() {
        
    }

    public function render($name, $include = TRUE) {
        require 'views/' . $name . '.php';
    }

}
