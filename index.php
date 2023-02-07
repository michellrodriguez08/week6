<?php

//This is my controller

//Turn on error reporting
ini_set('display errors', 1);
error_reporting(E_ALL);

////Start a session
//session_start();

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate F3 Base class
$f3 = Base::instance();

//Define a default route (328/diner)
$f3->route('GET /', function() {
   // echo "Week 6";
    //Instantiate a view
    $view = new Template();
    echo $view->render("views/info.html");
});

//Run Fat Free
$f3->run();