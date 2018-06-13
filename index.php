<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:27
 */

define('APP_HOST' ,$_SERVER['HTTP_HOST']);

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'User';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$config = require('./config.php');
require('./function.php');

use Controller\Controller;

$controller = 'Controller\\' . $controller;
$obj = new $controller();
$obj->$action();