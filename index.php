<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path,PHP_URL_PATH);

ROUTING::get('login','DefaultController');
ROUTING::get('register','DefaultController');
ROUTING::get('activities','DefaultController');
ROUTING::get('buypass','DefaultController');
ROUTING::get('graphic','DefaultController');
ROUTING::get('pricing','DefaultController');
ROUTING::run($path);