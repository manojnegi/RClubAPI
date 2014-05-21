<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
	
    $path = 'src/';

    include $path.str_replace('\\', '/', $className) .'.php';

}
?>