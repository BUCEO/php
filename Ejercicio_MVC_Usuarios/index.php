<?php
// index.php

require_once 'models/User.php';
require_once 'factories/UserFactory.php';
require_once 'controllers/UserController.php';

use App\Controllers\UserController;

$controller = new UserController();
$controller->createUser([
    'username' => 'juanp',
    'email' => 'juan@example.com'
]);
