<?php
spl_autoload_register(function($class_name) {
    $file_name = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . $class_name . '.php';
    if (file_exists($file_name)) {
	include_once $file_name;
	return true;
    }
    return false;
});