<?php

class Error extends Controller {

    function __Construct($code) {
        parent::__construct();
        $this->view->errorcode = $code;
        $this->view->title = $code . ' error';
        $this->view->render('error/error_view');
    }

}
