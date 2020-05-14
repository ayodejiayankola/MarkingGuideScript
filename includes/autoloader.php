<?php
spl_autoload_register('myAutoLoader');


function myAutoLoader($className)
{
   // $url =$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URL'];
    if ($className) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $extension = '.php';
    $fullPath = $path . $className . $extension;
}


