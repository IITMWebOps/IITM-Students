<?php

class Profile extends Controller {

    function __Construct() {
        parent::__construct();
    }

    function Index() {
        
    }

    function Student($rollno) {
        $this->view->rollno = strtoupper($rollno);
        $this->view->title = strtoupper($rollno);
        $this->view->render('profile/profile_view');
    }

}
