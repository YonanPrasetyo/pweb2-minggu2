<?php
// routes.php

require_once 'app/controllers/ProductController.php';

$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/user/index' || $url == '/') {
    $controller->index();
}
