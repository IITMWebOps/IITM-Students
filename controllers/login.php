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
        $this->view->render('login/login_view');
    }

    function submit() {
        $this->model->submit();
    }

}
