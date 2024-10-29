<?php
// routes.php

require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/StockController.php';
$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/user/index' || $url == '/') {
    $controller->index();
}
$controller = new StockController();

if ($url == '/stock/index') {
    $controller->stock();
}elseif ($url == '/stock/tambah') {
    $controller->tambah($_POST);
}


?>