<?php


require 'functions.php';
require 'App.php';
require 'Controller.php';
require 'Database.php';
require 'Model.php';

spl_autoload_register(function ($class_name) {

    require'../app/models/' . $class_name. 'php';
});
