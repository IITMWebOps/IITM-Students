<?php

$this->render('header');

echo $this->errorcode;
echo '</br>';
$this->title = 'Oops';
echo $this->title;

$this->render('footer');
