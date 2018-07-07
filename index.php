<?php

use allan\User;

require "vendor/autoload.php";

$user = new User();
$allan = new User ();

$student = new \allan\Student();
$student->getAge();

$allan->setUsername("allan kirui");
var_dump($student->getAge());
var_dump($student->fullUserName());

//
//var_dump($allan->getUsername());
