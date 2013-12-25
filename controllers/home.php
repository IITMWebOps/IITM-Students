<?php

class Home extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->title = 'Students Portal';
        $this->view->render('home/home_view');
    }

}
