<?php

spl_autoload_register('myAutoload');
function myAutoload($className){
    $path ="classes/";
    $extension=".php";
    $fullPath= $path . $className . $extension ;
}
