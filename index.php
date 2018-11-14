<?php
include_once 'config.php';
include_once 'autoloader.php';

$model = new Model();
$view = new View();
$view->render($model->getData());