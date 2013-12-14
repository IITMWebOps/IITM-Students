<?php 
$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = $_GET['url'];
$parts = explode('/',$path);
$controller = $parts[0];
$view = $parts[0];
$vars = array_slice($parts,2);
if ($controller=='')
{
	$controller = 'home';
}
elseif (preg_match("/^[a-z][a-z][0-9][0-9][a-z][0-9][0-9][0-9]$/i", $controller))
{
	$rollno = $controller;
	$controller = 'profile';
}
$controllerloc = '/controllers/'.$controller.'.php';
include($controllerloc);
?>