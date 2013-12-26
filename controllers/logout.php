<?php

class Logout extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        $this->view->title = 'Logout';
        Session::init();
        Session::destroy();
        header('Location:' . URL);
    }

}
