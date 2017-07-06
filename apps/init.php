<?php

spl_autoload_register(function($class){

    require_once 'Main/'.$class.'.php';
});

$GLOBALS['path'] = '/Ex-code-1.0.0/public';