<?php
// routes.php

require_once 'app/controllers/KategoriController.php';

$controller = new KategoriController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/kategori/index' || $url == '/') {
    $controller->index();
}elseif ($url == '/kategori/create') {
    $controller->create();
}elseif ($url == '/kategori/store') {
    $controller->store();
}elseif (preg_match('/\/kategori\/edit\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->edit($id);
}elseif ($url == '/kategori/update') {
    $controller->update();
}elseif (preg_match('/\/kategori\/delete\/(\d+)/', $url,$matches)) {
    $id = $matches[1];
    $controller->delete($id);
}