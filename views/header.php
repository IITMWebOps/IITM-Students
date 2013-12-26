<!DOCTYPE html>
<html>
    <head>
        <title><?php echo isset($this->title) ? $this->title : 'STUDENT PORTAL'; ?></title>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/default.css" >
        <script src="<?php echo URL ?>public/js/jquery.js"></script> 
        <script src="<?php echo URL ?>public/js/default.js"></script> 
    </head>
    <body>
        <div id='header-container'>

            <div id="mainlogo"><a href=<?php echo URL ?>>STUDENT PORTAL</a></div>
            <div id="rightlogo"><?php
                if (Session::get('loggedIn')) {
                    echo Session::get('username');
                } else {
                    echo 'Sign in';
                }
                ?></div>
        </div>
        <div id='left-container'>
        </div>
        <div id='right-container'><?php
            if (Session::get('loggedIn')) {
                $this->rollno = Session::get('username');
                $this->render('profile/profile_view');
                echo '</br>';
                echo "<a href='" . URL . "logout" . "'>Logout</a>";
            } else {
                $this->render('login/login_form');
            }
            ?>
            <?php ?>


        </div>

        <div id='main-container'>

