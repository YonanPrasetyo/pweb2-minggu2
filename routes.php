<?php
// routes.php

require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/StockController.php';
$controller = new ProductController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/product/index' || $url == '/product') {
    $controller->index();
}elseif ($url == '/product/create') {
    $controller->create();
}elseif ($url == '/product/store') {
    $controller->store();
}elseif (preg_match('/\/product\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->edit($id);
}elseif ($url == '/product/update') {
    $controller->update();
}elseif (preg_match('/\/product\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->delete($id);
}

$controller = new StockController();

if ($url == '/stock/index') {
    $controller->stock();
}elseif ($url == '/stock/tambah') {
    $controller->tambah($_POST);
}elseif (preg_match('/\/stock\/edit\/(\d+)/', $url,$matches)) {
    $ID_Stock_Produk = $matches[1];
    $controller->edit($ID_Stock_Produk);
}elseif ($url == '/stock/update') {
    $controller->update($_POST);
}elseif (preg_match('/\/stock\/hapus\/(\d+)/', $url,$matches)) {
    $ID_Stock_Produk = $matches[1];
    $controller->hapus($ID_Stock_Produk);
}
?>