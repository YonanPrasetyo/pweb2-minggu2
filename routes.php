<?php
// routes.php

require_once 'app/controllers/KategoriController.php';
require_once 'app/controllers/ProductController.php';

$controller1 = new ProductController();
$controller2 = new KategoriController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/kategori/index' || $url == '/') {
    $controller2->index();
}elseif ($url == '/kategori/create') {
    $controller2->create();
}elseif ($url == '/kategori/store') {
    $controller2->store();
}elseif (preg_match('/\/kategori\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller2->edit($id);
}elseif ($url == '/kategori/update') {
    $controller2->update();
}elseif (preg_match('/\/kategori\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller2->delete($id);
}elseif ($url == '/product/index' || $url == '/product') {
    $controller1->index();
}elseif ($url == '/product/create') {
    $controller1->create();
}elseif ($url == '/product/store') {
    $controller1->store();
}elseif (preg_match('/\/product\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller1->edit($id);
}elseif ($url == '/product/update') {
    $controller1->update();
}elseif (preg_match('/\/product\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller1->delete($id);
}