<?php

//This is my controller

//Turn on error reporting
ini_set('display errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate F3 Base class
$f3 = Base::instance();

//Define a default route (328/diner)
$f3->route('GET /', function($f3) {

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('food', 'Pizza');
    $f3->set('color', 'Purple');
    $f3->set('temp', 67);
    $f3->set('radius', 10);

//    Define an array of fruits
    $fruits = array("apple", "banana", "orange");
    $f3->set('fruits', $fruits);
//    foreach ($fruits as $fruit) {
//        echo $fruit;
//    }

    //other way to write arrays
    $f3->set('colors', array("red", "blue", "yellow"));



   // echo "Week 6";
    //Instantiate a view
    $view = new Template();
    echo $view->render('views/info.html');
});

//Run Fat Free
$f3->run();