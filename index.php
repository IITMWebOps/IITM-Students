<?php

require 'libs/Main.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Database.php';
require 'libs/Model.php';
require 'libs/Session.php';

require 'config/paths.php';
require 'config/db.php';

$app = new Main();
$app->_init();

