<?php
// routes.php

require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/PenjualanController.php';

$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

// if ($url == '/user/index' || $url == '/') {
//     $controller->index();
// }

$controller = new PenjualanController();

if ($url == '/penjualan/index') {
    $controller->index();
}elseif ($url == '/penjualan/create') {
    $controller->create();
}elseif ($url == '/penjualan/store') {
    $controller->store();
}elseif ($url == '/penjualan/edit/:id') {
    $controller->edit($_GET['id']);
}elseif ($url == '/penjualan/update') {
    $controller->update();
}