<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        if (Session::get('loggedIn')) {
            header('location:./');
        }
        $this->view->title = 'Login';
        $this->view->render('header');
        $this->view->render('login/login_form');
        $this->view->render('footer');
    }

    function submit() {
        $this->model->submit();
    }

}
