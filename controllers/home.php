<?php

class Home extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        $this->view->title = 'Students Portal';
        $this->view->render('header');
        $this->view->render('home/home_view');
        $this->view->render('footer');
    }

}
