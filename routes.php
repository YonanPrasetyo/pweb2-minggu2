<?php
// routes.php

require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/PenjualanController.php';

$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

$controller = new PenjualanController();

if ($url == '/penjualan/index') {
    $controller->index();
}elseif ($url == '/penjualan/create') {
    $controller->create();
}elseif ($url == '/penjualan/store') {
    $controller->store();
}elseif (preg_match('/\/penjualan\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->edit($id);
}elseif ($url == '/penjualan/update') {
    $controller->update();
}elseif (preg_match('/\/penjualan\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->delete($id);
}